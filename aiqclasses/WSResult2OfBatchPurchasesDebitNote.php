<?php

class WSResult2OfBatchPurchasesDebitNote
{

  /**
   * 
   * @var BatchPurchasesDebitNote $Result
   * @access public
   */
  public $Result;

  /**
   * 
   * @param BatchPurchasesDebitNote $Result
   * @access public
   */
  public function __construct($Result)
  {
    $this->Result = $Result;
  }

}
