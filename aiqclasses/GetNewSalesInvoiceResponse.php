<?php

class GetNewSalesInvoiceResponse
{

  /**
   * 
   * @var WSResult2OfInvoice $GetNewSalesInvoiceResult
   * @access public
   */
  public $GetNewSalesInvoiceResult;

  /**
   * 
   * @param WSResult2OfInvoice $GetNewSalesInvoiceResult
   * @access public
   */
  public function __construct($GetNewSalesInvoiceResult)
  {
    $this->GetNewSalesInvoiceResult = $GetNewSalesInvoiceResult;
  }

}
