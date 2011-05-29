<?php

class SaveInvoiceSpecifyCostGetBackInvoiceIDResponse
{

  /**
   * 
   * @var WSResultStatus $SaveInvoiceSpecifyCostGetBackInvoiceIDResult
   * @access public
   */
  public $SaveInvoiceSpecifyCostGetBackInvoiceIDResult;

  /**
   * 
   * @var int $invoiceID
   * @access public
   */
  public $invoiceID;

  /**
   * 
   * @param WSResultStatus $SaveInvoiceSpecifyCostGetBackInvoiceIDResult
   * @param int $invoiceID
   * @access public
   */
  public function __construct($SaveInvoiceSpecifyCostGetBackInvoiceIDResult, $invoiceID)
  {
    $this->SaveInvoiceSpecifyCostGetBackInvoiceIDResult = $SaveInvoiceSpecifyCostGetBackInvoiceIDResult;
    $this->invoiceID = $invoiceID;
  }

}
