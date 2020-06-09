<?php
/**
 *   Base class
 * 
 *   Sets the basic site variables
 * 
*/

class Base
{

    /**
	 * Set admin true or false
     * To define whether we have to set up the admin section
	 *
	 * @since 1.0
	 * @var boolean
	 */
    protected $admin;

     /**
	 * Set Smarty values
	 *
	 * @since 1.0
	 * @var array
	 */
    public $smarty;

    /**
	 * Set site values
	 *
	 * @since 1.0
	 * @var array
	 */
    protected $site;

    /**
	 * Blog settings
	 *
	 * @since 1.0
	 * @var array
	 */
    public $set_objects;

    /**
	 * Set the main body template
	 *
	 * @since 1.0
	 * @var string
	 */
    protected $body_template;

    /**
	 * Set the default site theme
	 *
	 * @since 1.0
	 * @var string
	 */
    protected $site_theme;

    /**
	 * Set the site template
	 *
	 * @since 1.0
	 * @var string
	 */
    public $template;

    /**
	 * The requested page
	 *
	 * @since 1.0
	 * @var string
	 */
    public $page;

    /**
	 * Define the page title
	 *
	 * @since 1.0
	 * @var string
	 */
    public $page_title;

    /**
	 * Registration required in order to comment or like
	 *
	 * @since 1.0
	 * @var boolean
	 */
    public $reg_required;

    /**
	 * Site reply email address
	 *
	 * @since 1.0
	 * @var string
	 */
    public $reply_email;

    /**
	 * Session ID
	 *
	 * @since 1.0
	 * @var string
	 */
    protected $session_id;

    /**
	 * User data
	 *
	 * @since 1.0
	 * @var string
	 */
    protected $user_data;

    /**
	 * Error codes
	 *
	 * @since 1.0
	 * @var string
	 */
    protected $errors = array('401', '403', '404');


    public function __construct($admin=false) {
        if ($admin == true) {
            $this->admin = true;
        }

        $this->initSmarty();
        $this->loadDefaults();

        @session_start();
    }


    /**
     * @since 1.0
	 *
	 * Initialize Smarty
     * 
	 */
    protected function initSmarty() {
        $this->smarty = new Smarty();
		$this->smarty->template_dir    = __ROOT__ . DIRECTORY_SEPARATOR . TEMPLATE_DIR . DIRECTORY_SEPARATOR;
		$this->smarty->compile_dir     = __SMARTY__ . 'templates_c' . DIRECTORY_SEPARATOR;
		$this->smarty->config_dir      = __SMARTY__ . 'configs' . DIRECTORY_SEPARATOR;
		$this->smarty->cache_dir       = __SMARTY__ . 'cache' . DIRECTORY_SEPARATOR;	
        $this->smarty->error_reporting = (E_ALL - E_NOTICE);
    }

    /**
     * @since 1.0
	 *
	 * Load the default site values
     * Set the default site template
     * 
	 */
    protected function loadDefaults() {
        $db = new DB();
        $this->set_objects  = $db->query("select * from site_options");
        $this->page         = filter_input(INPUT_GET,'page') ? filter_input(INPUT_GET,'page') : ($this->admin ? 'view-posts' : 'content');
        $this->site         = $this->rows2Object();
        $this->site_theme   = $this->site->site_theme;
        $this->template     = ($this->admin ? 'admin' : $this->site_theme);
        $this->site_link    = $this->site->site_link;
        $this->req_required = $this->site->activation;
        $this->reply_email  = $this->site->reply_email;
    }

    /**
     * Set the page title for the requested page
     * 
     * @since 1.0
	 *
     *  @param string $title the page title
	 */
    public function addTitle($title) {
        $this->page_title = html_entity_decode($title);
    }

    /**
     * @since 1.0
	 *
	 * Validates and includes the requested page
     * Loads the template file for the requested page
     * 
     * Render the base template file (body.tpl)
     * Display the template for the requested page
     * 
	 */
    public function renderPage() {
        // Assign basic values
        $this->smarty->assign('page', $this);
        $this->smarty->assign('site', $this->site);
        $this->smarty->assign('get_template_dir_url', $this->site->site_link . DIRECTORY_SEPARATOR . TEMPLATE_DIR . DIRECTORY_SEPARATOR . $this->template);

        // If a session ID has been found, initiate Users class and assign user values
        if ($this->getSessionId() && !in_array($this->page, $this->errors) ) {
            $users = new Users();
            $this->user_data = $users->getById();
            $this->smarty->assign('logged_in', $this->getSessionId());
            $this->smarty->assign('user', $this->user_data);
            $this->smarty->assign('do_keywords', ($this->page == 'search' && isset($_REQUEST['id']) ? (string)$_REQUEST['id'] : ''));
            if ($this->user_data->role === '3') { 
                $this->smarty->assign('is_admin','true');
            }
        }

        // Get popular posts
        $posts = new Posts();
        $this->smarty->assign('popular_posts', $posts->getPopularPosts());

        // Check if the requested template file exists
        if (file_exists(__ROOT__ . TEMPLATE_DIR . DIRECTORY_SEPARATOR . $this->template . DIRECTORY_SEPARATOR . $this->page . '.tpl')) { 
            $this->content = $this->smarty->fetch($this->smarty->template_dir[0] . $this->template . DIRECTORY_SEPARATOR . $this->page . '.tpl');
        }
        
        if ($posts->postExists($this->page)) {
            $this->content = $this->smarty->fetch($this->smarty->template_dir[0] . $this->template . DIRECTORY_SEPARATOR . 'post.tpl');
        }

        
        // Load and display the base template and requested template file
        $this->body_template = $this->smarty->template_dir[0] . $this->template . DIRECTORY_SEPARATOR . 'body.tpl';	
        $this->smarty->display($this->body_template);
    }


    /**
     * @since 1.0
     * 
     * Clear Smarty's cached template
	 *
	 */
    public function clearCache() {
        $this->smarty->clearCache($this->template . DIRECTORY_SEPARATOR . $this->page . '.tpl');
    }


    /**
     * @since 1.0
     * 
     * Determine whether a session ID has been set
     * Set @var $session_id
	 *
	 * @return boolean
	 */
    public function getSessionId() {
        if (isset($_SESSION['sid'])) {
            $this->session_id = $_SESSION['sid'];
            return true;
        }
        return false;
	 }


    /**
     * @since 1.0
	 *
	 * Visible error handling
     * 
     * @param string $code      the error code
     * @param string $message   the error message (optional)
	 */
    public function showError($code, $message = null) {
        $_SESSION['code'] = (int)$code;
        
        if ($message != null) {
            $_SESSION['msg'] = $message;
        }
    
        $this->sendHeader('Location', 'notify');
        die;
    }


    /**
     * @since 1.0
	 *
	 * Create the header handler
     * 
     * @param string $key   header type
     * @param string $value header value
	 */
    public function sendHeader($key, $value) {
        header(sprintf('%s: %s', $key, preg_replace('/\s+/', ' ', $value)));
    }


    /**
     * @since 1.0
	 *
	 * Create objects for the requested site settings
     * 
     * @return array list of site settings
	 */
    protected function rows2Object($array=null) {
        $object = new stdClass;
        if (isset($array)) {
            foreach ($array as $key => $value) {
                $object->$key = $value;
            }
        } else {
            foreach($this->set_objects as $row) {
                $object->{$row['setting']} = $row['value'];
            }
        }

        return $object;
    }
    

    /**
     * @since 1.0
	 *
	 * Confirm requested request method is POST
     * 
     * @return boolean 
	 */
    public function isPostBack() {
		return (strtoupper($_SERVER["REQUEST_METHOD"]) === "POST");
    }
    

    /**
     * @since 1.0
	 *
	 * Get the site link
     * 
     * @return string   base site url
	 */
    public function get_sitelink() {
		return $this->site->site_link;
    }
    

    /**
     * @since 1.0
	 *
	 * Create an array from a string
     * 
     * @return array   list of data
	 */
    public function createArray($data, $delimiter=null) {
        $string = trim(preg_replace('|\\s*(?:' . preg_quote($delimiter) . ')\\s*|', $delimiter, $data));
        return explode($delimiter, $string);
    }
    

    /**
     * @since 1.0
	 *
	 * Update the site settings
     * 
     * @param string    form data
     * 
     * @return array    list of data
	 */
    public function updateBlogSettings($form) {		
		$db = new DB();
		$site = $this->rows2Object($form);			
			
		$sql = $sql_keys = array();
		foreach($form as $key => $value)
		{
			$sql[] = sprintf("when %s then %s", $db->escapeString($key), $db->escapeString(trim($value)));
			$sql_keys[] = $db->escapeString($key);
		}
		
        $db->query(
                sprintf("update site_options set value = CASE setting %s END 
                         where setting in (%s)", 
                         implode(' ', $sql), 
                         implode(', ', $sql_keys)
                        )
                    );
	}
}

?>