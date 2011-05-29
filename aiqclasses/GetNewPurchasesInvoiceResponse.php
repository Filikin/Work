<?php

class GetNewPurchasesInvoiceResponse
{

  /**
   * 
   * @var WSResult2OfInvoice $GetNewPurchasesInvoiceResult
   * @access public
   */
  public $GetNewPurchasesInvoiceResult;

  /**
   * 
   * @param WSResult2OfInvoice $GetNewPurchasesInvoiceResult
   * @access public
   */
  public function __construct($GetNewPurchasesInvoiceResult)
  {
    $this->GetNewPurchasesInvoiceResult = $GetNewPurchasesInvoiceResult;
  }

}
