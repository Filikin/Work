<?php

class CreateBatchPurchasesInvoiceResponse
{

  /**
   * 
   * @var WSResult2OfString $CreateBatchPurchasesInvoiceResult
   * @access public
   */
  public $CreateBatchPurchasesInvoiceResult;

  /**
   * 
   * @param WSResult2OfString $CreateBatchPurchasesInvoiceResult
   * @access public
   */
  public function __construct($CreateBatchPurchasesInvoiceResult)
  {
    $this->CreateBatchPurchasesInvoiceResult = $CreateBatchPurchasesInvoiceResult;
  }

}
