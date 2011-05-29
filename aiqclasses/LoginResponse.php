<?php

class LoginResponse
{

  /**
   * 
   * @var string $LoginResult
   * @access public
   */
  public $LoginResult;

  /**
   * 
   * @param string $LoginResult
   * @access public
   */
  public function __construct($LoginResult)
  {
    $this->LoginResult = $LoginResult;
  }

}
