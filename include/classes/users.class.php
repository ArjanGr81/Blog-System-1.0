<?php
/**
 *   Users class
 * 
 *   Validates and initiates all user-related methods
 * 
*/

class Users extends Base
{
    /**
	 * Set the user ID
	 *
	 * @since 1.0
	 * @var int
	 */
    public $user_id;

    /**
	 * Set the username
	 *
	 * @since 1.0
	 * @var string
	 */
    protected $username;

    /**
	 * User status pending
	 *
	 * @since 1.0
	 * @var int
	 */
    const STATUS_PENDING = 1;

    /**
	 * User status confirmed
	 *
	 * @since 1.0
	 * @var int
	 */
    const STATUS_CONFIRMED = 2;

    /**
	 * User status disabled
	 *
	 * @since 1.0
	 * @var int
	 */
    const STATUS_DISABLED = 3;

    /**
	 * Username in use
	 *
	 * @since 1.0
	 * @var int
	 */
    const USERNAME_IN_USE = -1;

    /**
	 * Username too short (< 3)
	 *
	 * @since 1.0
	 * @var int
	 */
    const USERNAME_SHORT = -2;

    /**
	 * Username too long (> 25)
	 *
	 * @since 1.0
	 * @var int
	 */
    const USERNAME_LONG = -3;

    /**
	 * Password too short (< 8)
	 *
	 * @since 1.0
	 * @var int
	 */
    const PASSWORD_SHORT = -4;

    /**
	 * Passwords did not match
	 *
	 * @since 1.0
	 * @var int
	 */
    const PASSWORD_MISMATCH = -5;

    /**
	 * Email address invalid
	 *
	 * @since 1.0
	 * @var int
	 */
    const EMAIL_INVALID = -6;

    /**
	 * Email address in use
	 *
	 * @since 1.0
	 * @var int
	 */
    const EMAIL_IN_USE = -7;

    /**
	 * Remove unconfirmed accounts after x days
	 *
	 * @since 1.0
	 * @var int
	 */
    const ACCOUNT_EXPIRATION = 14;

    /**
	 * Maximum image upload size
	 *
	 * @since 1.0
	 * @var int
	 */
    const MAX_SIZE = 102400; // 100 kb

    /**
	 * Images directory
	 *
	 * @since 1.0
	 * @var string
	 */
    const IMAGE_DIR = __ROOT__ . 'images/avatars/';


    public function __construct() {
        parent::__construct();
        parent::getSessionId();

        if (parent::getSessionId()) {
            $this->validateUser();
        }
    }


    /**
     * @since 1.0
	 *
	 * Validate the user before logging in
     * 
     * Sets a unique session ID if user passes validation
     * 
	 */
    public function login($username, $password, $sanitize=false) {
        // set username and password
        $this->username = ($sanitize = true ? htmlentities($username) : $username);
        $this->password = $password;

        // validate username
        $this->validateUser();

        // validate userstatus
        $this->validateStatus();

        // validate password
        $this->verifyPassword();

        // validate userSession
        $this->validateSession();
    }


    /**
     * @since 1.0
	 *
	 * unset and destroy the set session
     * 
	 */
    public function logout() {
        unset($_SESSION['sid']);
    }


     /**
     * @since 1.0
	 *
	 * Check if current user is admin
     * 
	 */
    public function checkAdmin() {
        $this->validateUser();

        $db = new DB();
        $result = $db->queryOneRow(sprintf("select role from users where id = %d", 
                                            $this->user_id));

        if ($result['role'] !== 3) {
            return false;
        }
    }


    /**
     * @since 1.0
	 *
	 * Validate username
     * 
     * Set $user_id and $username
     * 
	 */
    protected function validateUser() {
        $db = new DB();
        $do_values = ($this->username ? array('username', $this->username) : array('secret_uid', $this->session_id));
        $result = $db->queryOneRow(sprintf("select id, username from users where %s = %s", 
                                            $do_values[0], $db->escapeString($do_values[1])));
        if (!$result) {
            parent::showError('401', 'No user was found with this username');
        }

        $this->user_id = $result['id'];
        $this->username = $result['username'];
    }


    /**
     * @since 1.0
	 *
	 * Validate status
     * 
     * Only accounts that have been confirmed 
     * are allowed to continue
     * 
     * Accounts with a pending password request
     * are also rejected for log in
     * 
	 */
    protected function validateStatus() {
        $db = new DB();
        $result = $db->queryOneRow(sprintf("select status, secret from users where id = %d", 
                                            $this->user_id));
        
        // account status pending (activation required)
        if ($result['status'] == self::STATUS_PENDING) {
            $this->showError('401', 'Account requires activation, please check your email');
        // account status disabled
        } elseif ($result['status'] == self::STATUS_DISABLED) {
            $this->showError('403', 'Account has been disabled, please contact the site administrator');
        // password reset in progress
        } elseif (!is_null($result['secret'])) {
            $this->showError('401', 'Password has been reset, please check your email');
        }
    }
    

    /**
     * @since 1.0
	 *
	 * Validate session
     * 
     * Checks whether a unique session id has been set
     * 
     * Sets a unique session ID
     * 
	 */
    protected function validateSession() {
        $db = new DB();

        // select unique session id from database
        $row = $db->queryOneRow(sprintf("select secret_uid from users where id = %d", 
                                        $this->user_id));
        $secret_uid = $row['secret_uid'];

        // if the unique session id does not exist, create a new one and store it in the database
        if ($row['secret_uid'] === null) {
            $secret_uid = $this->generateSessionId();
            $db->queryOneRow(sprintf("update users set secret_uid = %s where id = %d", 
                                      $db->escapeString($secret_uid), $this->user_id));
        }

        // set the unique session ID
        $_SESSION['sid'] = $secret_uid;
    }


    /**
     * @since 1.0
	 *
	 * Generate random unique session ID
     * 
     * @return string   random md5 hash string
     * 
	 */
    public function generateSessionId() {
        $string = rand(); 
        return md5($string);
    }

    /**
     * @since 1.0
	 *
	 * Generate a hashed password
     * 
	 */
    public function setPassword($password) {
        $this->validateUser();

        $secret = password_hash($password, PASSWORD_DEFAULT);

        $db = new DB();
        $db->queryOneRow(sprintf("update users set pass_hash = %s where id = %d", 
                                  $db->escapeString($secret), $this->user_id));
    }

    /**
     * @since 1.0
	 *
	 * Verify a hashed password
     * 
	 */
    protected function verifyPassword() {
        $this->validateUser();
        
        $db = new DB();
        $secret = $db->queryOneRow(sprintf("select pass_hash from users where id = %d", 
                                            $this->user_id));

        if(!password_verify($this->password, $secret['pass_hash'])) {
            return $this->showError('401', 'The password you submitted is incorrect');
        }
    }


    /**
     * @since 1.0
	 *
	 * Get the username
     * 
     * @return string   username
     * 
	 */
    public function getUsername($id) {
        $db = new DB();
        $row = $db->queryOneRow(sprintf("select username, name from users where id = %d", 
                                         $id));
        return (isset($row['name']) ? $row['name'] : $row['username']);
    }


    /**
     * @since 1.0
	 *
	 * Retrieves user information by ID
     * 
     * @return array   list of user data
     * 
	 */
    public function getById() {
        $this->validateUser();

        $db = new DB();
        $result = $db->queryOneRow(sprintf("select * from users where id = %d", 
                                            $this->user_id), true);
        $this->validateStatus();

        return $result;
    }


    /**
     * @since 1.0
	 *
	 * Retrieves user information by username
     * 
     * @return array   list of user data
     * 
	 */
    public function getByUsername() {
        $db = new DB();
        $result = $db->queryOneRow(sprintf("select * from users where username = %s", 
                                            $db->escapeString($this->username)), true);
        return $result;
    }


    /**
     * @since 1.0
	 *
	 * Retrieves user information by email address
     * 
     * @return array   list of user data
     * 
	 */
    protected function getByEmail() {
        $db = new DB();
        $result = $db->queryOneRow(sprintf("select * from users where email = %s", 
                                            $db->escapeString($this->email)), true);
        return $result;
    }


    /**
     * @since 1.0
	 *
	 * Get the user roles
     * 
     * @return array   list of user roles
     * 
	 */
    public function listUserRoles() {
        $list_roles = explode(',', $this->site->user_roles);
        foreach ($list_roles as $role) {
            $define_roles = explode(':', $role);
            $get_roles[$define_roles[0]] = $define_roles[1];
        }
        return $get_roles;
    }


    /**
     * @since 1.0
	 *
	 * Sign up function
     * 
     * Sanitation and validation of user input
     * 
     * @return mixed   ID of new registered user or list of user data
     * 
	 */
    public function signUp($username, $password, $email, $ip, $secret) {
        $this->username = htmlentities($username);
        $this->password = htmlentities($password);
        $this->email = $email;
        
        // minimum username length
	    if (strlen($this->username) < 3) {
            return self::USERNAME_SHORT;
        }

        // maximum username length
        if (strlen($this->username) > 25) {
            return self::USERNAME_LONG;
        }

        // check whether username is already in use
        if ($this->getByUsername()) {
            return self::USERNAME_IN_USE;
        }

        // minimum password length
	    if (strlen($this->password) < 8) {
            return self::PASSWORD_SHORT;
        }

        // validate email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return self::EMAIL_INVALID;
        }

        // check whether email address is already in use
        if ($this->getByEmail()) {
            return self::EMAIL_IN_USE;
        }

        $hostname = 'N/A';
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
            $hostname = gethostbyaddr($ip);
        }

        $db = new DB();
        $key = password_hash($this->password, PASSWORD_DEFAULT);
        $sql = sprintf("insert into users (username, pass_hash, secret, email, ip, hostname, joined) 
                        values (%s, %s, %s, %s, %s, %s, %s)", 
                        $db->escapeString($this->username), 
                        $db->escapeString($key), 
                        $db->escapeString($secret), 
                        $db->escapeString($email), 
                        $db->escapeString($ip), 
                        $db->escapeString($hostname),
                        $db->escapeString(date("Y-m-d H:i:s"))
                    );
    
        return $db->queryInsert($sql);
    }


    /**
     * @since 1.0
	 *
	 * Check activation token
     * 
     * Checks if the given activation token is still valid
     * 
     * Removes unconfirmed accounts
     * 
     * @return array   list of user data
     * 
	 */
    public function checkActivation($token) {
        $db = new DB();
        // Delete registered accounts that have not been activated within a set period of time
        $db->query(sprintf("delete from users 
                            where joined < now() - interval %d day and status = %d", 
                            self::ACCOUNT_EXPIRATION, self::STATUS_PENDING));
	 
        return $db->queryOneRow(sprintf("select * from users where secret = %s", 
                                         $db->escapeString($token)), true);
    }


    /**
     * @since 1.0
	 *
	 * Process the activation token
     * 
     * Checks if the given activation token is still valid
     * 
     * Send emails to users with unconfirmed accounts (older than 7 days)
     * 
     * @return array   list of user data
     * 
	 */
    public function performActivation($token) {
	    $db = new DB();
         
        // Send activation emails to those whom are yet to activate their account
        $mail = new Messenger();
        $data = $db->query(sprintf("select username, email, secret from users 
                                    where status = %d and joined < now() - interval %d day", 
                                    self::STATUS_PENDING, 7));

        foreach ($data as $user) {
            $send_vars = array('username' => $user['username'], 'key' => $user['secret']);
	        $mail->sendMail('user_activation', $base->reply_email, $user['email'], $send_vars);
        }

        return $db->queryOneRow(sprintf("select id, username, email from users 
                                         where secret = %s", 
                                         $db->escapeString($token)), true);
    }


    /**
     * @since 1.0
	 *
	 * Clear activation and update user account
     * 
     * @param $token    request token
     * 
	 */
    public function clearActivation($token) {
        $db = new DB();
        $db->query(sprintf("update users set status = %d, secret = %s where secret = %s", 
                            self::STATUS_CONFIRMED, 'null', $db->escapeString($token)));
    }


    /**
     * @since 1.0
	 *
	 * Verify and update password
     * 
     * @param $data     user data
     * 
	 */
    public function updatePassword($data) {
        $user_data = parent::rows2Object($data);

        $db = new DB();
        $mail = new Messenger();

        if (isset($user_data->token) || isset($user_data->user_id)) {
            // minimum password length
            if (strlen($user_data->password) < 8) {
                return self::PASSWORD_SHORT;
            }
            // passwords did not match
            if ($user_data->password != $user_data->confirm) {
                return self::PASSWORD_MISMATCH;
            }

            $user = (isset($user_data->token) ? $this->checkActivation($user_data->token) : $this->getById());
            $send_vars = array('username' => $user->username);
            $mail->sendMail('password_reset', $this->reply_email, $user->email, $send_vars);

            $key = password_hash($user_data->password, PASSWORD_DEFAULT);
            $db->queryOneRow(sprintf("update users set pass_hash = %s where id = %d",
                                      $db->escapeString($key),
                                      $user->id));

            if (isset($user_data->token)) {
                $this->clearActivation($user_data->token);
            } else {
                $this->logout();
            }

            return $this->showError('600', 'We have updated your account');
        } else {
            $this->email = $user_data->email;

            // check whether email address correlates to a user account
            if (!$this->getByEmail()) {
                return self::EMAIL_INVALID;
            }

            $token = $this->generateSessionId();
            $send_vars = array('key' => $token, 'email_password' => 'password');
            $mail->sendMail('password_change', $this->reply_email, $user_data->email, $send_vars);

            $db->queryOneRow(sprintf("update users set secret = %s where id = %d",
                                      $db->escapeString($token),
                                      $this->getByEmail()->id));
        }
    }


    /**
     * @since 1.0
	 *
	 * Clear activation and update user account
     * 
     * @param $data     user data
     * 
	 */
    public function updateUserData($data, $files=null) {
        $user_data = parent::rows2Object($data);
        $current = $this->getById();

        if ($current->name !== $user_data->real_name) {
            $db = new DB();
            $db->query(sprintf("update users set name = %s where id = %d",
                            $db->escapeString($user_data->real_name),
                            $this->user_id));
        }

        if (isset($files) && !empty($files['name'][0])) {
            $this->uploadMedia($files);
        }

        if (empty($user_data->email)) {
            return self::EMAIL_INVALID;
        } else if ($user_data->email !== $current->email) {
            // validate email address
            if (!filter_var($user_data->email, FILTER_VALIDATE_EMAIL)) {
                return self::EMAIL_INVALID;
            }
            // check whether email address is already in use
            if ($current && $user_data->user_id !== $current->id) {
                return self::EMAIL_IN_USE;
            }

            $mail = new Messenger();
            $key = $this->generateSessionId();
            $send_vars = array('username' => $this->username, 'key' => $key, 'email_password' => 'email address');
            // send mail to submitted email address to confirm change
            $mail->sendMail('email_change', $this->reply_email, $user_data->email, $send_vars);
            // send notification of requested email change
            $mail->sendMail('notify_change', $this->reply_email, $current->email, $send_vars);

            $db = new DB();
            $db->query(sprintf("update users set email = %s, secret = %s where id = %d",
                            $db->escapeString($user_data->email ? $user_data->email : $current->email), 
                            $db->escapeString($key),
                            $this->user_id));

            $this->logout();
            return $this->showError('600', 'We have updated your account and an email has been send');
        }
    }


    /**
     * Update the comment count for current user
     * 
     * @since 1.0
     * 
     * @param int   $blog_id        ID of the user
     * 
	 */
    public function updateCommentCount($user_id) {			
        $db = new DB();
        $db->query(sprintf("update users
                            set comments = (select count(id) from comments where author = %d)
                            where id = %d", $user_id, $user_id ));		
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
    protected function uploadMedia($files) {
        $this->avatar = $files;

        $this->checkImages();

        $this->uploadImages();
    }


    /**
     * Validate avatar
     * 
     * @since 1.0
     * 
	 */
    protected function checkImages() {
        // Does our image have the allowed file extension
        if (exif_imagetype($this->avatar['tmp_name']) != IMAGETYPE_JPEG ) {
            $this->destroyAvatar($avatar_filename);
            return parent::showError('401', 'This image type is not allowed');
        }
            
        // Check if the image doesn't exceed the maximum file size limit
        if ($this->avatar['size'] > self::MAX_SIZE) {
            $this->destroyAvatar($avatar_filename);
            return parent::showError('401', 'The image exceeds the maximum upload size of ' . self::MAX_SIZE);
        }
    }


    /**
     * Upload avatar
     * 
     * @since 1.0
     * 
	 */
    protected function uploadImages() {
        $avatar_filename = $this->generateSessionId();
        move_uploaded_file($this->avatar['tmp_name'], self::IMAGE_DIR . $avatar_filename . '.jpg');
             
        // Check if the image upload was successful
        if (!file_exists(self::IMAGE_DIR . $avatar_filename . '.jpg') ) {
            $this->destroyAvatar($avatar_filename);
            return parent::showError('403', 'We are unable to upload your image');
        }

        $db = new DB();
        $db->queryOneRow(sprintf("update users set avatar = %s where id = %d",
                            $db->escapeString($avatar_filename), $this->user_id));
    }


    public function deleteAvatar() {
        $db = new DB();
        $row = $db->queryOneRow(sprintf("select avatar from users where id = %d",
                                         $this->user_id));

        $this->destroyAvatar($row['avatar']);
        parent::clearCache();
        $this->sendHeader('Location', $this->site->site_link . '/user-account');
    }


    /**
     * Unlink / destroy images
     * 
     * @since 1.0
     * 
	 */
    protected function destroyAvatar($avatar) {
        array_map("unlink", glob(self::IMAGE_DIR . $avatar . '.jpg'));
        
        $db = new DB();
        return $db->queryOneRow(sprintf("update users set avatar = %s where id = %d ", 'null', $this->user_id));
    }
}

?>