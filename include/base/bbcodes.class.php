<?php

class bbCodes extends Base
{
    /**
	* Emoticons
	*
	* @since 1.0
	* @var array
	*/
    protected $emoticons = array(
    ':cool:', 
    ':crying:',
    ':sweating:', 
    ':muted:',
    ':shrug:',
    ':angry:',
    ':greed:',
    ':happy:',
    ':in-love:',
    ':sad:', 
    ':shocked:',
    ':sick:',
    ':tongue:', 
    ':whistle:',
    ':wink:', 
    ':laughing:'
    );

    protected $replace_emoticons = array(
        'cool.svg', 
        'crying.svg',
        'sweating.svg', 
        'muted.svg',
        'shrug.svg',
        'angry.svg',
        'greed.svg',
        'happy.svg',
        'in-love.svg',
        'sad.svg', 
        'shocked.svg',
        'sick.svg',
        'tongue.svg', 
        'whistle.svg',
        'wink.svg', 
        'laughing.svg'
        );
        protected $text;

    public function __construct() {
        parent::__construct();
    }


    public function doHtml($input, $process_linebreaks = false) {
        $bbcode = new StringParser_BBCode();
        $this->text = $input;
        
        $this->text = preg_replace_callback('#([\s\(\)])(https?|ftp|news){1}://([\w\-]+\.([\w\-]+\.)*[\w]+(:[0-9]+)?(/[^"\s\(\)<\[]*)?)#i', function ($matches) { return $matches[1].handleUrl_tag($matches[2].'://'.$matches[3]); }, $this->text);
        $this->text = preg_replace_callback('#([\s\(\)])(www|ftp)\.(([\w\-]+\.)*[\w]+(:[0-9]+)?(/[^"\s\(\)<\[]*)?)#i', function ($matches) { return $matches[1].handleUrl_tag($matches[2].$matches[3], $matches[2].$matches[3]); }, $this->text);
        $this->text = $this->doEmoticons();
        $this->text = $this->convertLinebreaks();
        if ($process_linebreaks == true) {
            $bbcode->addFilter(STRINGPARSER_FILTER_PRE, 'convertLinebreaks');
        }
        $this->text = str_replace(array('&lt;','&gt;', '&amp;nbsp;'), array('[',']',' '), $this->text);

        $bbcode->addParser (array ('block', 'inline', 'link', 'listitem'), 'nl2br');
        // Quote
        $bbcode->addCode ('quote', 'usecontent?', 'doQuotes', array ('usecontent_param' => 'default'),
                        'inline', array ('block', 'inline'), array ());
        // Bold
        $bbcode->addCode ('strong', 'simple_replace', null, array ('start_tag' => '<strong>', 'end_tag' => '</strong>'),
                        'inline', array ('block', 'inline'), array ());
        // Underline
        $bbcode->addCode ('u', 'simple_replace', null, array ('start_tag' => '<u>', 'end_tag' => '</u>'),
                        'inline', array ('block', 'inline'), array ());
        // Paragraphs
        $bbcode->addCode ('p', 'simple_replace', null, array ('start_tag' => '<p>', 'end_tag' => '</p>'),
                        'inline', array ('block', 'inline'), array ());
        // Italic
        $bbcode->addCode ('em', 'simple_replace', null, array ('start_tag' => '<em>', 'end_tag' => '</em>'),
                        'inline', array ('block', 'inline'), array ());
        // Strike
        $bbcode->addCode ('strike', 'simple_replace', null, array ('start_tag' => '<strike>', 'end_tag' => '</strike>'),
                        'inline', array ('block', 'inline'), array ());
        // List
        $bbcode->addCode ('ul', 'simple_replace', null, array ('start_tag' => '<ul>', 'end_tag' => '</ul>'),
                        'list', array ('block', 'listitem'), array ());
        // list item                  
        $bbcode->addCode ('li', 'simple_replace', null, array ('start_tag' => '<li>', 'end_tag' => '</li>'),
                        'listitem', array ('list'), array ());
        $bbcode->setCodeFlag ('*', 'closetag', BBCODE_CLOSETAG_OPTIONAL);
        // Size
        $bbcode->addCode ('size', 'usecontent?', 'doSize', array ('usecontent_param' => 'default'),
                        'inline', array ('block', 'inline'), array ());
        // Color
        $bbcode->addCode ('color', 'usecontent?', 'doColor', array ('usecontent_param' => 'default'),
                        'inline', array ('block', 'inline'), array ());
        // URL
        $bbcode->addCode ('url', 'usecontent?', 'doUrl', array ('usecontent_param' => 'default'),
                        'inline', array ('block', 'inline'), array ());
        // IMG
        $bbcode->addCode ('img', 'usecontent', 'doImg', array (),
                        'image', array ('listitem', 'block', 'inline', 'link'), array ());
        $bbcode->addCode ('IMG', 'usecontent', 'doImg', array (),
                        'image', array ('listitem', 'block', 'inline', 'link'), array ());
        
        $bbcode->setCodeFlag ('list', 'opentag.before.newline', BBCODE_NEWLINE_DROP);
        $bbcode->setCodeFlag ('list', 'closetag.before.newline', BBCODE_NEWLINE_DROP);
        
        return $bbcode->parse($this->text);
    }


    protected function doEmoticons() {
        $this->text = ' '.$this->text.' ';
        
        for ($i = 0; $i < count($this->emoticons); ++$i) {
            $show_emoticons = 'class="resize_emoticons" src="'.$this->site_link.'/common/tiny_mce/plugins/emoticons/img/'.$this->replace_emoticons[$i].'"';
            $this->text = preg_replace("#(?<=.\W|\W.|^\W)".preg_quote($this->emoticons[$i], '#')."(?=.\W|\W.|\W$)#m", '$1&nbsp;<img '.$show_emoticons.' alt="'.substr($this->replace_emoticons[$i], 0, strrpos($this->replace_emoticons[$i], '.')).'" />&nbsp;$2', $this->text);
        }

        return substr($this->text, 1, -1);
    }


    protected function convertLinebreaks() {
        return str_replace ('&lt;br /&gt;', '<br />', $this->text);
    }


    protected function bbcodeStripContents() {
        return preg_replace ("/[^\n]/", '', $this->text);
    }


    protected function doQuotes($action, $attributes, $content, $params, &$node_object) {
        // 1) the code is being valided
        if ($action == 'validate') {
            // the code is specified as follows: [quote]text[/quote]
            if (!isset ($attributes['default'])) { return $content; }
            // the code is specified as follows: [quote=name]Text[/quote]
            return $attributes['default'];
        } else {
            // the code was specified as follows: [quote]text[/quote]
            if (!isset ($attributes['default'])) {
                return '<div id="quote">'.html_entity_decode($content).'</div>';
            }
            // the code was specified as follows: [quote=name]Text[/quote]
            return '<div id="quote"><span class="quote_hdr">'.$attributes['default'].':</span><span class="quote_msg">'.$content.'</span></div>';
        }
    }


    protected function doSize($action, $attributes, $content, $params, &$node_object) {
        if (!isset ($attributes['default'])) {
            return $content;
        } else {
            // the code was specified as follows: [size=0-9]Text[/size]
            return '<span style="font-size: '.$attributes['default'].'px">'.$content.'</span>';
        }
    }


    protected function doColor ($action, $attributes, $content, $params, &$node_object) {
        if (!isset ($attributes['default'])) {
            return $content;
        } else {
            // the code was specified as follows: [color=red]Text[/color]
            return '<span style="color: '.$attributes['default'].'">'.$content.'</span>';
        }
    }


    protected function doUrl($action, $attributes, $content, $params, $node_object) {
        if (!isset ($attributes['default'])) {
            $url = $content;
            $this->text = htmlspecialchars ($content);
        } else {
            $url = $attributes['default'];
            $this->text = $content;
        }
        if ($action == 'validate') {
            if (substr ($url, 0, 5) == 'data:' || substr ($url, 0, 5) == 'file:'
            || substr ($url, 0, 11) == 'javascript:' || substr ($url, 0, 4) == 'jar:') {
                return false;
            }
            return true;
        }
        return '<a href="'.htmlspecialchars ($url).'">'.$this->text.'</a>';
    }


    protected function handleUrl($url) {
        $full_url = str_replace(array(' ', '\'', '`', '\''), array('%20', '', '', ''), $url);
        if (strpos($url, 'www.') === 0) { $full_url = 'http://'.$full_url; } // If it starts with www, we add http://
        else if (strpos($url, 'ftp.') === 0) { $full_url = 'ftp://'.$full_url; } // Else if it starts with ftp, we add ftp://
        else if (!preg_match('#^([a-z0-9]{3,6})://#', $url, $bah)) { $full_url = 'http://'.$full_url; } // Else if it doesn't start with abcdef://, we add http://
                    
        return '<a href=\''.$full_url.'\' target=\'_blank\'>'.$url.'</a>';
    }


    protected function doImg($action, $attributes, $content, $params, $node_object) {
        if ($action == 'validate') {
            if (substr ($content, 0, 5) == 'data:' || substr ($content, 0, 5) == 'file:'
            || substr ($content, 0, 11) == 'javascript:' || substr ($content, 0, 4) == 'jar:') {
                return false;
            }
            return true;
        }
        return '<img src="'.htmlspecialchars($content).'" alt="'.htmlspecialchars($content).'">';
    }


    protected function performUrls() {
        return preg_replace_callback('#([\s\(\)])(https?|ftp|news){1}://([\w\-]+\.([\w\-]+\.)*[\w]+(:[0-9]+)?(/[^"\s\(\)<\[]*)?)#ie', function ($matches) { return $matches[1].handleUrl_tag($matches[2].'://'.$matches[3]); }, $this->text);
    }
}

?>