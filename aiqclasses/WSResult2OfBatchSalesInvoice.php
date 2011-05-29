<?php

class WSResult2OfBatchSalesInvoice
{

  /**
   * 
   * @var BatchSalesInvoice $Result
   * @access public
   */
  public $Result;

  /**
   * 
   * @param BatchSalesInvoice $Result
   * @access public
   */
  public function __construct($Result)
  {
    $this->Result = $Result;
  }

}
