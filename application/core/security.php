<?php
class Security {

  public $session_name = 'csrf_token';


  public static function makeSafeString($string) {
    return htmlspecialchars($string);
  }


  public function genCSRFToken($words) {
    $words .= $_SERVER['REMOTE_ADDR'] ? $_SERVER['REMOTE_ADDR'] : '';
    return substr(sha1($words.uniqid()), 0, 27);
  }
    
  public function saveCSRFToken($token) {
    $_SESSION[$this->session_name] = $token;
  }
    
  public function setSessionName($name) {
    $this->session_name = $session_name;
  }

  public function getCSRFToken($words = '') {
    if($_SESSION[$this->session_name]) {
      return $_SESSION[$this->session_name];
    }
    $token = $this->genCSRFToken($words);
    $this->saveCSRFToken($token);
    return $token;
  }
    
  /**
   * @param <string> $token Токен для проверки
   * @return <boolean> true Если Токен верный
   * @return <boolean> false Если Токен неправильный                  
   *
   */
  public function checkCSRFToken($token) {
    if(empty($token)) return false;
    return ($token == $_SESSION[$this->session_name]) ? true : false;
  }

  /**
    *
    */
  public function checkFormSendTry($form_name, $max_send_try) {

    if($_SESSION['form_questbook_try'] > self::MAX_FORM_SEND_TRY) {
      if($_SESSION['form_questbook_last_ts'] > $ts - 60) {  // 1 minutes
        return array('err'=>true,'err_msg'=>$this->i18n->get('many_try'));
      } else {
         $_SESSION['form_questbook_try'] = 0;
      }
    } else {
      $_SESSION['form_questbook_try']++;
      $_SESSION['form_questbook_last_ts'] = $ts;
    }


  }
	
	
}
?>