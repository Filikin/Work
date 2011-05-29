<?php

class SaveGLDefaults
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var GLDefaults $glDefaults
   * @access public
   */
  public $glDefaults;

  /**
   * 
   * @param string $token
   * @param GLDefaults $glDefaults
   * @access public
   */
  public function __construct($token, $glDefaults)
  {
    $this->token = $token;
    $this->glDefaults = $glDefaults;
  }

}
