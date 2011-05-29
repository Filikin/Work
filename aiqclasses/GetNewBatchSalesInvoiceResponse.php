<?php

class GetNewBatchSalesInvoiceResponse
{

  /**
   * 
   * @var WSResult2OfBatchSalesInvoice $GetNewBatchSalesInvoiceResult
   * @access public
   */
  public $GetNewBatchSalesInvoiceResult;

  /**
   * 
   * @param WSResult2OfBatchSalesInvoice $GetNewBatchSalesInvoiceResult
   * @access public
   */
  public function __construct($GetNewBatchSalesInvoiceResult)
  {
    $this->GetNewBatchSalesInvoiceResult = $GetNewBatchSalesInvoiceResult;
  }

}
