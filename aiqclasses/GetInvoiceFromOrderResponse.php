<?php

class GetInvoiceFromOrderResponse
{

  /**
   * 
   * @var WSResult2OfInvoice $GetInvoiceFromOrderResult
   * @access public
   */
  public $GetInvoiceFromOrderResult;

  /**
   * 
   * @param WSResult2OfInvoice $GetInvoiceFromOrderResult
   * @access public
   */
  public function __construct($GetInvoiceFromOrderResult)
  {
    $this->GetInvoiceFromOrderResult = $GetInvoiceFromOrderResult;
  }

}
