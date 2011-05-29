<?php

class GetInvoiceResponse
{

  /**
   * 
   * @var WSResult2OfInvoice $GetInvoiceResult
   * @access public
   */
  public $GetInvoiceResult;

  /**
   * 
   * @param WSResult2OfInvoice $GetInvoiceResult
   * @access public
   */
  public function __construct($GetInvoiceResult)
  {
    $this->GetInvoiceResult = $GetInvoiceResult;
  }

}
