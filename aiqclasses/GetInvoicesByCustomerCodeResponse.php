<?php

class GetInvoicesByCustomerCodeResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfInvoice $GetInvoicesByCustomerCodeResult
   * @access public
   */
  public $GetInvoicesByCustomerCodeResult;

  /**
   * 
   * @param WSResult2OfArrayOfInvoice $GetInvoicesByCustomerCodeResult
   * @access public
   */
  public function __construct($GetInvoicesByCustomerCodeResult)
  {
    $this->GetInvoicesByCustomerCodeResult = $GetInvoicesByCustomerCodeResult;
  }

}
