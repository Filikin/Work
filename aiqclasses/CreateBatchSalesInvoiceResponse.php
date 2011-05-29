<?php

class CreateBatchSalesInvoiceResponse
{

  /**
   * 
   * @var WSResult2OfString $CreateBatchSalesInvoiceResult
   * @access public
   */
  public $CreateBatchSalesInvoiceResult;

  /**
   * 
   * @param WSResult2OfString $CreateBatchSalesInvoiceResult
   * @access public
   */
  public function __construct($CreateBatchSalesInvoiceResult)
  {
    $this->CreateBatchSalesInvoiceResult = $CreateBatchSalesInvoiceResult;
  }

}
