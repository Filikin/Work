<?php

class GetNewBatchPurchasesInvoiceResponse
{

  /**
   * 
   * @var WSResult2OfBatchPurchasesInvoice $GetNewBatchPurchasesInvoiceResult
   * @access public
   */
  public $GetNewBatchPurchasesInvoiceResult;

  /**
   * 
   * @param WSResult2OfBatchPurchasesInvoice $GetNewBatchPurchasesInvoiceResult
   * @access public
   */
  public function __construct($GetNewBatchPurchasesInvoiceResult)
  {
    $this->GetNewBatchPurchasesInvoiceResult = $GetNewBatchPurchasesInvoiceResult;
  }

}
