<?php

class CreateInvoicesGetBackInvoiceIDsResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfWSResultStatus $CreateInvoicesGetBackInvoiceIDsResult
   * @access public
   */
  public $CreateInvoicesGetBackInvoiceIDsResult;

  /**
   * 
   * @var array $invoiceIDs
   * @access public
   */
  public $invoiceIDs;

  /**
   * 
   * @param WSResult2OfArrayOfWSResultStatus $CreateInvoicesGetBackInvoiceIDsResult
   * @param array $invoiceIDs
   * @access public
   */
  public function __construct($CreateInvoicesGetBackInvoiceIDsResult, $invoiceIDs)
  {
    $this->CreateInvoicesGetBackInvoiceIDsResult = $CreateInvoicesGetBackInvoiceIDsResult;
    $this->invoiceIDs = $invoiceIDs;
  }

}
