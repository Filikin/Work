<?php

class CreateInvoicesSpecifyCostGetBackInvoiceIDsResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfWSResultStatus $CreateInvoicesSpecifyCostGetBackInvoiceIDsResult
   * @access public
   */
  public $CreateInvoicesSpecifyCostGetBackInvoiceIDsResult;

  /**
   * 
   * @var array $invoiceIDs
   * @access public
   */
  public $invoiceIDs;

  /**
   * 
   * @param WSResult2OfArrayOfWSResultStatus $CreateInvoicesSpecifyCostGetBackInvoiceIDsResult
   * @param array $invoiceIDs
   * @access public
   */
  public function __construct($CreateInvoicesSpecifyCostGetBackInvoiceIDsResult, $invoiceIDs)
  {
    $this->CreateInvoicesSpecifyCostGetBackInvoiceIDsResult = $CreateInvoicesSpecifyCostGetBackInvoiceIDsResult;
    $this->invoiceIDs = $invoiceIDs;
  }

}
