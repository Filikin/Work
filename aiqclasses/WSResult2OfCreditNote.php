<?php

class WSResult2OfCreditNote
{

  /**
   * 
   * @var CreditNote $Result
   * @access public
   */
  public $Result;

  /**
   * 
   * @param CreditNote $Result
   * @access public
   */
  public function __construct($Result)
  {
    $this->Result = $Result;
  }

}
