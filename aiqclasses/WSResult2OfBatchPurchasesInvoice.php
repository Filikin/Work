<?php

class WSResult2OfBatchPurchasesInvoice
{

  /**
   * 
   * @var BatchPurchasesInvoice $Result
   * @access public
   */
  public $Result;

  /**
   * 
   * @param BatchPurchasesInvoice $Result
   * @access public
   */
  public function __construct($Result)
  {
    $this->Result = $Result;
  }

}
