<?php

class SaveInvoiceGetBackInvoiceIDResponse
{

  /**
   * 
   * @var WSResultStatus $SaveInvoiceGetBackInvoiceIDResult
   * @access public
   */
  public $SaveInvoiceGetBackInvoiceIDResult;

  /**
   * 
   * @var int $invoiceID
   * @access public
   */
  public $invoiceID;

  /**
   * 
   * @param WSResultStatus $SaveInvoiceGetBackInvoiceIDResult
   * @param int $invoiceID
   * @access public
   */
  public function __construct($SaveInvoiceGetBackInvoiceIDResult, $invoiceID)
  {
    $this->SaveInvoiceGetBackInvoiceIDResult = $SaveInvoiceGetBackInvoiceIDResult;
    $this->invoiceID = $invoiceID;
  }

}
