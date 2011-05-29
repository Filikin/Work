<?php

class SaveBankDefaults
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var BankDefaults $bankDefaults
   * @access public
   */
  public $bankDefaults;

  /**
   * 
   * @param string $token
   * @param BankDefaults $bankDefaults
   * @access public
   */
  public function __construct($token, $bankDefaults)
  {
    $this->token = $token;
    $this->bankDefaults = $bankDefaults;
  }

}
