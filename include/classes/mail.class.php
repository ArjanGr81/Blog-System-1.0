<?php

class Messenger extends Base
{
    
   public function __construct() {
      parent::__construct();
   }
	
   
     
   private function setMailAuth() {
      $this->mail = new PHPMailer;
         
      $this->mail->isSMTP();
      $this->mail->Host       = MAIL_HOST;                            
      $this->mail->Port       = MAIL_PORT;
      $this->mail->SMTPAuth   = MAIL_AUTH;
      $this->mail->Username   = MAIL_USERNAME;
      $this->mail->Password   = MAIL_PASSWORD;
      $this->mail->SMTPDebug  = 0;
      $this->mail->SMTPSecure = MAIL_ENCRYPT;
   }
	     
	
   public function sendMail($template, $sender, $receiver, $array = null) {	   
      if ($array !== null) { 
         $this->assign_vars = $array;
         $this->assignVars(); 
      }
       
      $this->sender   = (empty($this->sender) ? $this->site->reply_email : $this->sender);
      $this->receiver = $receiver;
      $this->msg      = $this->smarty->fetch('common/messages/' . $template . '.tpl');
      $this->renderMessage();
   }


   protected function assignVars() {
      $this->smarty->assign('site', $this->site);
      foreach ($this->assign_vars as $key => $value) {
         $this->smarty->assign($key, $value);
	   }
   }


   protected function renderMessage() {		
      $this->msg = str_replace("\r\n", "\n", $this->msg);
         
      $drop_header = '';
      $match = array();
      if (preg_match('#^(Subject:(.*?))$#m', $this->msg, $match)) {   
         $this->subject = ( isset($match[2]) ? trim($match[2]) : 'No subject defined');
         $drop_header .= '[\r\n]*?' . preg_quote($match[1], '#');
      } else {
         $this->subject = (isset($this->subject) ? $this->subject : 'No subject defined');
      }
      
      if ($drop_header) {
         $this->msg = trim(preg_replace('#' . $drop_header . '#s', '', $this->msg));
      }
      
      $this->sendMessage();
   }


   protected function sendMessage() {
      $title = ( $this->sender !== $this->site->reply_email ? $this->sender : $this->site->title );
         
      $this->setMailAuth();
      $this->mail->setFrom($this->sender, $title);
      $this->mail->addReplyTo($this->sender, $title);
      $this->mail->addAddress($this->receiver);  
      $this->mail->Subject = $this->subject;
      $this->mail->Body    = $this->msg;
         
      if (!$this->mail->send()) { 
         return false; 
      }
   }
}
