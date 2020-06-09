<?php

class Comments extends Base {

    /**
	 * Comments per page
	 *
	 * @since 1.0
	 * @var int
	 */
    const COMMENTS_PP = 15;

    /**
	 * Replacement text for deleted comment
     * containing replies
	 *
	 * @since 1.0
	 * @var int
	 */
    const COMMENT_REMOVED = "<em>This comment has been removed</em>";

    public function __construct() {
        parent::__construct();
    }


    /**
     * Get a range of comments
     * 
     * @since 1.0
     * 
     * @param int $start    offset for query
     * @param int $id       ID of the blogpost
     * 
     * @return array        processed list of data
     * 
	 */
    public function getCommentsRange($start, $id) {		
        $limit = ($start === false ? "" : " LIMIT " . $start . "," . self::COMMENTS_PP);
        $db = new DB();
        $results = $db->query(
                            sprintf("select 
                                        c.*,
                                        u.avatar,
                                        u.id as user_id,
                                        u.username
                                        from comments c 
                                        use index (blog_id)
                                        left join users u on u.id = c.author
                                        where blog_id = %d and reply is null
                                        order by c.date desc".$limit,
                                        $id
                                    )
                                );

         return $this->processComments($results, true, false);  
     }


     /**
     * Process comments
     * 
     * @since 1.0
     * 
     * @param int  $comments    list of data
     * @param bool $html        process bb Codes
     * @param bool $reply       return replies
     * 
     * @return array        processed list of data
     * 
	 */
     protected function processComments($comments, $html=false, $reply=false) {
        $users = new Users();
        $array = array();
        foreach($comments as $key => $comment) {
            $array[$key] = $comment;
            $array[$key]['username'] = $users->getUsername($comment['author']);
            $array[$key]['like_unlike'] = $this->getLikesUnlikes($comment['id']);
            $array[$key]['like_count'] = $this->getLikesCount($comment['id'], 'like');
            $array[$key]['unlike_count'] = $this->getLikesCount($comment['id'], 'unlike');

            if (!$reply) {
                $array[$key]['reply_count'] = $this->getReplies($comment['id']);
                $array[$key]['replies'] = $this->getReplies($comment['id']);
            }

            if ($html) {
                $bbCodes = new bbCodes();
                $array[$key]['body'] = $bbCodes->doHtml($comment['body'], true);
            }
    
        }

        return $array;
     }


     /**
     * Get replies for a comment
     * 
     * @since 1.0
     * 
     * @param int  $comment     ID of the comment
     * 
     * @return array       processed list of data
     * 
	 */
    protected function getReplies($comment) {
        $db = new DB();
        $results = $db->query(
                            sprintf("select 
                                        c.*, 
                                        u.avatar, 
                                        u.id as user_id, 
                                        u.username 
                                        from comments c 
                                        use index (reply) 
                                        left join users u on u.id = c.author 
                                        where reply = %d 
                                        order by c.date asc", 
                                        $comment
                                    )
                                );
       
        if (count($results) > 0) { 
            return $this->processComments($results, true, true); 
        }
    }


    /**
     * Get comment count for blogpost
     * 
     * @since 1.0
     * 
     * @param int  $id     ID of the comment
     * 
     * @return array       list of data
     * 
	 */
    public function getCommentCount($id) {			
	 $db = new DB();  
     return $db->queryOneRow(sprintf("select count(id) as num from comments where blog_id = %d and reply is null", 
                                      $id), true);
    }


    /**
     * Get likes count for comment
     * 
     * @since 1.0
     * 
     * @param int  $id     ID of the comment
     * @param int  $type   Itype of like, unlike
     * 
     * @return array       list of data
     * 
	 */
    public function getLikesCount($id, $type) {			
        $db = new DB();  
        $rows = $db->queryOneRow(sprintf("select count(id) as total from likes_unlikes where comment_id = %d and %s > 0", 
                                         $id, 'c_' . $type));

        return $rows['total'];
    }


    /**
     * Get comment data by ID
     * 
     * @since 1.0
     * 
     * @param int   $id     ID of the comment
     * @param bool  $object return array or list of objects
     * 
     * @return array       processed list of data
     * 
	 */
    public function getCommentById($id, $object=false) {		
        $db = new DB();
        $row = $db->queryOneRow(
                        sprintf("select c.*, 
                                    u.username 
                                    from comments c 
                                    inner join users u on c.author = u.id 
                                    where c.id = %d ", 
                                    $id), ($object ? $object : false));
                                    
        return $row;
    }


    /**
     * Insert comment into the database
     * 
     * @since 1.0
     * 
     * @param int       $blog_id    ID of the blogpost
     * @param string    $title      title of the comment
     * @param string    $body       body of the comment
     * @param int       $author     ID of the author
     * @param int       $reply_id   ID of the replied comment
     * 
     * @return array       processed list of data
     * 
	 */
    public function insertComment($blog_id, $title, $body, $author, $reply_id=null, $comment=false) {
        $db = new DB();

        if ($comment) {
            $sql = $db->queryOneRow(
                            sprintf("update comments set title = %s, body = %s, edit_date = %s where id = %d", 
                                $db->escapeString(htmlentities($title)), 
                                $db->escapeString(htmlentities($body)), 
                                $db->escapeString(date("Y-m-d H:i:s")), 
                                $comment
                            )
                        );
        } else {
            $sql = $db->queryInsert(
                            sprintf("insert into comments 
                                (blog_id, author, title, body, date, reply) 
                                values 
                                (%d, %d, %s, %s, %s, %s)",
                                $blog_id, 
                                $author, 
                                $db->escapeString(htmlentities($title)), 
                                $db->escapeString(htmlentities($body)), 
                                $db->escapeString(date("Y-m-d H:i:s")), 
                                (is_null($reply_id) ? 'null' : $reply_id)
                            )
                        );

        $this->updateCommentCount($blog_id);
        $users = new users();
        $users->updateCommentCount($author);
        }
     }


     /**
     * Insert comment into the database
     * 
     * @since 1.0
     * 
     * @param int   $comment_id     ID of the comment
     * @param int   $blog_id        ID of the blogpost
     * 
	 */
     public function deleteCommentById($comment_id, $blog_id) {
        $db = new DB();
        $reply_to = $db->queryOneRow(sprintf("select count(id) as num from comments where reply = %d", 
                                              $comment_id));
         
        if ($reply_to['num'] > 0) {
            $db->queryOneRow(sprintf("update comments set body = %s, edit_date = %s where id = %d", 
                                      $db->escapeString(htmlentities(self::COMMENT_REMOVED)),
                                      $db->escapeString(date('Y-m-d H:i:s')), 
                                      $comment_id));
        } else {
            $db->query(sprintf("delete from comments where id = %d", $comment_id));
        }  
         
        $users = new users();
        $users->updateCommentCount($users->user_id);
        $this->updateCommentCount($blog_id);
     }


     /**
     * Update the comment count for a blogpost
     * 
     * @since 1.0
     * 
     * @param int   $blog_id        ID of the blogpost
     * 
	 */
     protected function updateCommentCount($blog_id) {			
        $db = new DB();
        $db->query(sprintf("update posts
                            set comments = (select count(id) from comments where blog_id = %d)
                            where id = %d", $blog_id, $blog_id ));		
     }


     /**
     * Check if current user has liked / unliked a comment
     * 
     * @since 1.0
     * 
     * @param int   $comment        ID of the comment
     * 
     * @return array
     * 
	 */
    protected function getLikesUnlikes($comment) {
        $users = new users();
        $db = new DB();
        $row = $db->queryOneRow(
                        sprintf("select c_like, c_unlike from likes_unlikes use index (idx_comment) where comment_id = %d and user_id = %d", 
                                 $comment, $users->user_id));
        
        if ($row) {
            if ($row['c_like'] == 1) {
                return 'like';
            } elseif ($row['c_unlike'] == 1) {
                return 'unlike';
            }
        }
    }


    /**
     * set like / unlike on a comment for the current user
     * 
     * @since 1.0
     * 
     * @param string   $type        like or unlike
     * @param int      $comment     ID of the comment
     * 
	 */
    public function checkLikesUnlikes($type, $comment) {
        $input_exists = $this->getLikesUnlikes($comment);

        $users = new users();
        $db = new DB();

        if ($input_exists) {
            if ($type == 'like') {
                $value = sprintf("c_like = 1, c_unlike = %s", 'null');
            } else {
                $value = sprintf("c_like = %s, c_unlike = 1", 'null');
            }
            $db->queryOneRow(sprintf("update likes_unlikes set %s where comment_id = %d and user_id = %d", $value, (int)$comment, (int)$users->user_id));
        } else {
            $db->queryInsert(sprintf("insert into likes_unlikes (comment_id, user_id, %s) 
                                         values (%d, %d, 1)",  
                                      'c_'.$type, $comment, $users->user_id));
        }
    }
}

?>