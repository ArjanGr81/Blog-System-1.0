<?php
/**
 *   Posts class
 * 
 *   Contains all post-related methods
 * 
*/

class Posts extends Base
{

    /**
	 * Maximum image upload size
	 *
	 * @since 1.0
	 * @var int
	 */
    const MAX_SIZE = 512000; // 500 kb

    /**
	 * Images directory
	 *
	 * @since 1.0
	 * @var string
	 */
    const IMAGE_DIR = __ROOT__ . 'images/';

    /**
	 * Images thumbnails directory
	 *
	 * @since 1.0
	 * @var string
	 */
    const THUMB_DIR = __ROOT__ . 'images/thumbs/';

    public function __construct() {
        parent::__construct();
    }


    /**
     * Make sure the requested blogpost exists
     * 
     * @since 1.0
	 *
     * @param string $post title of a blogpost
	 */
    public function postExists($post, $return=false) {
        $db = new DB();
        $row = $db->queryOneRow(sprintf("select id from posts where post_link = %s",
                                         $db->escapeString(preg_replace('/\s+/', ' ', $post))));

        return ($return ? $row['id'] : $row);
    }


    /**
     * Return estimated reading time
     * 
     * @since 1.0
	 *
     * @param string $content   content of the post
     * 
     * @return string   human-readable time in minutes and/or seconds
	 */
    public function readTime($content) {
        $word = str_word_count(strip_tags($content));
        $m = floor($word / 200);
        $s = floor($word % 200 / (200 / 60));
        
        return ($m > 0 ? $m . ' minute' . ($m <> 1 ? 's' : '') . ', ' : '') . $s . ' second' . ($s <> 1 ? 's' : '');
    }


    /**
     * Check for duplicate entries
     * Adjust post_link accordingly
     * 
     * @since 1.0
	 *
     * @param string    internal url for the blogpost
	 */
    public function setPostLink($post) {
        $db = new DB();
        $result = $db->queryOneRow(
                            sprintf("select post_link from posts where title = %s order by post_link desc",
                                     $db->escapeString($post)
                                    )
                        );

        if ($result > 0) {
            $link = explode('-', $result['post_link']);
            $entry = array_pop($link);
            $entry = (is_numeric($entry) ? '-' . ($entry + 1) : '-' . $entry . '-1');

            return strtolower(implode('-', $link).$entry);
        }
        return strtolower(str_replace(' ', '-', $post));
    }


    /**
     * Get the blogposts to show on the homepage
     * 
     * @since 1.0
	 *
     * @param bool $skip_id offset for SQL query
	 */
    public function getFrontPosts($skip_id=false) {
        $db = new DB();
        $rows = $db->query(sprintf("select * from posts order by date desc limit 15 %s",
                                    $skip_id ? 'OFFSET 3' : ''));
        return $this->processPosts($rows, true, $skip_id ? 120 : 200);
    }


    /**
     * Get all blogposts
     * 
     * @since 1.0
	 *
     * @return array $rows list of post data
	 */
    public function getBlogPosts() {
        $db = new DB();
        $rows = $db->query("select * from posts order by date desc");
        return $this->processPosts($rows);
    }


     /**
     * Get a single blogpost
     * 
     * @since 1.0
	 *
     * @param int $id   ID of the blogpost
     * 
     * @return array    list of blogpost data
	 */
    public function getSingleBlogPost($post, $object=false) {
        $db = new DB();
        $row = $db->queryOneRow(sprintf("select * from posts where id = %d",
                                         $post), ($object ? $object : false));

        return $row;
    }


    /**
     * Get the most popular blogposts
     * 
     * @since 1.0
	 *
     * @return array    list of blogpost data
	 */
    public function getPopularPosts() {
        $db = new DB();
        $rows = $db->query("select * from posts order by views desc, comments desc limit 5");
        return $rows;
    }


    /**
     * Process the blogpost data
     * 
     * @since 1.0
	 *
     * @param array $posts  blogpost data
     * @param bool  $html   process bbCodes when true
     * @param int   $short  apply substr() when not null
     * 
     * @return array    list of blogpost data
	 */
    public function processPosts($posts, $html=false, $short=null) {
        $array = array();
        $users = new Users();
        foreach ($posts as $key => $value) {
            $array[$key] = $value;
            $array[$key]['username'] = $users->getUsername($value['author']);

            if ($html) {
                if ($short) {
                    $text = strip_tags($value['body']);
                    $value['body'] = substr($text, 0, strpos($text, ' ', $short))." [...]";
                }

                $bbCodes = new bbCodes();
                $array[$key]['body'] = $bbCodes->doHtml($value['body'], true);
            }
        }

        return $array;
    }


    /**
     * Insert post data
     * 
     * @since 1.0
	 *
     * @param string    $title title of the blogpost
     * @param string    $body  body of the blogpost
     * 
     * @return int      $return_id  ID of the post
     * 
	 */
    public function insertPost($title, $body, $id=null, $files=null) {
        if (empty($title) || empty($body)) {
            parent::showError('422', 'Content can not be empty');
        }

        $db = new DB();
        if ($id) {
            if (!$this->getSingleBlogPost($id)) {
                parent::showError('404', 'The blog you tried to edit does not exist (anymore)');
            } else {
                $return_id = $db->queryOneRow(
                    sprintf("update posts set title = %s, body = %s, search = %s, post_link = %s where id = %d",
                             $db->escapeString(htmlentities(trim($title))),
                             $db->escapeString(htmlentities(trim($body))),
                             $db->escapeString(htmlentities(trim($title) . ' ' . trim($body))),
                             $db->escapeString(htmlentities($this->setPostLink($title))),
                             $id
                           )
                        );
                if (isset($files) && !empty($files['name'][0])) {
                    $this->uploadMedia($files, $id);
                }

                return $return_id;
            }
        } else {
            $users = new users();
            $author = $users->getById();

            $return_id = $db->queryInsert(
                                sprintf("insert into posts (title, body, search, date, author, post_link)
                                                    values (%s, %s, %s, %s, %d, %s)",
                                    $db->escapeString(htmlentities(trim($title))),
                                    $db->escapeString(htmlentities(trim($body))),
                                    $db->escapeString(htmlentities(trim($title) . ' ' . trim($body))),
                                    $db->escapeString(date('Y-m-d H:i:s')),
                                    $author->id,
                                    $db->escapeString(htmlentities($this->setPostLink($title))),
                                )
                            );
            
            if (isset($files) && !empty($files['name'][0])) {
                $this->uploadMedia($files, $return_id);
            }
        }
        parent::sendHeader('Location', $this->site_link . '/admin');
    }


    /**
     * Delete a blogpost
     * 
     * @since 1.0
	 *
     * @param int    $id ID of the blogpost
     * 
	 */
    public function deletePost($id) {
        if (!$this->getSingleBlogPost($id)) {
            parent::showError('404', 'The blog you tried to edit does not exist (anymore)');
        }
        $db = new DB();
        $db->queryOneRow(sprintf("delete from posts where id = %d",
                                  $id));
        
        $this->blog_id = $id;
        $this->destroyImages();
        parent::clearCache();

        parent::sendHeader('Location', $this->site_link . '/admin');
    }


    /**
     * Upload media (images)
     * 
     * @since 1.0
	 *
     * @param string $files image-files
     * @param int    $id ID of the blogpost
     * 
	 */
    protected function uploadMedia($files, $id=null) {
        $this->files = $files;
        $this->blog_id = $id;

        $this->checkImages();

        $this->uploadImages();
    }


    /**
     * Validate uploaded images
     * 
     * @since 1.0
     * 
	 */
    protected function checkImages() {
        $this->images = $this->processImages();
         
        for($i=0; $i < count($this->images); $i++) {
            // Do our files have the allowed file extension(s)
            if (exif_imagetype($this->images[$i]['tmp_name']) != IMAGETYPE_JPEG ) {
                $this->destroyImages();
                return parent::showError('401', 'This image type is not allowed');
            }
             
            // Check if the image doesn't exceed the maximum file size limit
            if ( $this->images[$i]['size'] > self::MAX_SIZE ) {
                $this->destroyImages();
                return parent::showError('401', 'The image exceeds the maximum upload size of ' . self::MAX_SIZE);
            }
         }
    }


    /**
     * Process images
     * 
     * @since 1.0
     * 
     * @return array    list of data
     * 
	 */
    protected function processImages() {
        $file_array = array();
        $file_keys = array_keys($this->files);

        for ($i=0; $i < count($this->files['name']); $i++) {
            foreach ($file_keys as $key) {
                $file_array[$i][$key] = $this->files[$key][$i];
            }
        }
         
        return $file_array;
    }


    /**
     * Upload images
     * 
     * @since 1.0
     * 
	 */
    protected function uploadImages() {
        $set_images = array();
        for($i=0; $i < count($this->images); $i++) {
            move_uploaded_file($this->images[$i]['tmp_name'], self::IMAGE_DIR . $this->blog_id . '_' . $i .'.jpg');
             
            // Check if the image upload was successful
            if (!file_exists(self::IMAGE_DIR . $this->blog_id . '_' . $i . '.jpg') ) {
                $this->destroyImages();
                return parent::showError('403', 'We are unable to upload your image');
            }
             
            // Upload the image thumbnail(s) to the thumbnail folder
            $this->createThumb(self::IMAGE_DIR . $this->blog_id . '_' . $i . '.jpg', 
                               self::THUMB_DIR . $this->blog_id . '_' . $i . '.jpg',
                               275, 0, 100);
            $set_images[] = $this->blog_id.'_'.$i;

            $db = new DB();
            $db->queryOneRow(sprintf("update posts set images = %s where id = %d",
                                $db->escapeString(implode(",", $set_images)), $this->blog_id));
        }
    }
    
    
    /**
     * Create thumbnails
     * 
     * @since 1.0
     * 
     * @param string $source_path   original uploaded image-file
     * @param string $thumb_path    thumbnail directory
     * @param string $thumb_width   set width of the thumbnail
     * @param string $thumb_height  set height of the thumbnail
     * @param string $quality       quality of the thumbnail
     * 
     * @return bool
     * 
	 */
    protected function createThumb($source_path, $thumb_path, $thumb_width, $thumb_height, $quality) {
        $tmp = explode('.', $source_path);
        $source_extention = strtolower(array_pop($tmp));
        $source_data      = imagecreatefromjpeg($source_path);
        $source_width     = imagesx($source_data);
        $source_height    = imagesy($source_data);

        if ($thumb_height === 0) {
            $thumb_height = round($source_height * ($thumb_width / $source_width));
        } else { // No scaling
            $thumb_height = $source_height;
            $thumb_width = $source_width;
        }

        $thumb_data = imagecreatetruecolor($thumb_width, $thumb_height);
        if (imagecopyresampled($thumb_data, $source_data, 0, 0, 0, 0, $thumb_width, $thumb_height, $source_width, $source_height)) {
            if (ImageJpeg($thumb_data, $thumb_path, $quality)) {
                Imagedestroy($source_data);
            } else {
                return false;
            }
        } else {
            return false;
        }

        return true;
    }


    /**
     * Unlink / destroy images
     * 
     * @since 1.0
     * 
	 */
    public function destroyImages($blog_id=null) {
        array_map("unlink", glob(self::IMAGE_DIR . ($blog_id ? $blog_id : $this->blog_id) . '_*.jpg'));
        array_map("unlink", glob(self::THUMB_DIR . ($blog_id ? $blog_id : $this->blog_id) . '_*.jpg'));
        
        $db = new DB();
        return $db->queryOneRow(sprintf("update posts set images = %s where id = %d ", 'null', 
                                        ($blog_id ? $blog_id : $this->blog_id)));
    }


    /**
     * Search posts
     * 
     * @since 1.0
     * 
     * @param $keywords     given keywords
     * @param $start        offset for sql query
     * 
     * @return array        list of processed data
     * 
	 */
    public function search($keywords, $start) {
        $limit = ($start === false ? "" : " LIMIT " . $start . ", 15");
        $words = explode(" ", $keywords);
	    $search_sql = array();
	    $word_count = 0;
        
        $db = new DB();
		foreach ($words as $word) {
            if ($word_count == 0) {
                $search_sql[] = sprintf("search like %s", $db->escapeString(htmlentities("%".$word."%")));
            } else {
                $search_sql[] = sprintf(" and search like %s", $db->escapeString(htmlentities("%".$word."%")));
            }
            $word_count++;
        }
        
        $query = sprintf("select p.*
                          from posts p 
                          use index (search)
                          where %s
                          order by date desc, title desc".$limit,
                          implode(' ', $search_sql)
                        );

        $order_pos = strpos($query, "order by");
        $where_pos = strpos($query, "where");
        $sql_count = "select count(p.id) as num from posts p ".substr($query, $where_pos, $order_pos-$where_pos);
        $count_results = $db->queryOneRow($sql_count);

        $rows = $db->query($query);
        if (count($rows) > 0) {
            $rows[0]["_totalrows"] = $count_results["num"];
        }

        return $this->processPosts($rows, true, 120);
    }
}

?>