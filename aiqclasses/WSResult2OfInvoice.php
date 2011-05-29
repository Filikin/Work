<?php

class WSResult2OfInvoice
{

  /**
   * 
   * @var Invoice $Result
   * @access public
   */
  public $Result;

  /**
   * 
   * @param Invoice $Result
   * @access public
   */
  public function __construct($Result)
  {
    $this->Result = $Result;
  }

}
