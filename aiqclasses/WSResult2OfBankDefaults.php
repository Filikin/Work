<?php

class WSResult2OfBankDefaults
{

  /**
   * 
   * @var BankDefaults $Result
   * @access public
   */
  public $Result;

  /**
   * 
   * @param BankDefaults $Result
   * @access public
   */
  public function __construct($Result)
  {
    $this->Result = $Result;
  }

}
