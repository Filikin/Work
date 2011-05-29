<?php

class GetInvoicesBySupplierCodeResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfInvoice $GetInvoicesBySupplierCodeResult
   * @access public
   */
  public $GetInvoicesBySupplierCodeResult;

  /**
   * 
   * @param WSResult2OfArrayOfInvoice $GetInvoicesBySupplierCodeResult
   * @access public
   */
  public function __construct($GetInvoicesBySupplierCodeResult)
  {
    $this->GetInvoicesBySupplierCodeResult = $GetInvoicesBySupplierCodeResult;
  }

}
