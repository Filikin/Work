<?php

class SaveInvoiceResponse
{

  /**
   * 
   * @var WSResultStatus $SaveInvoiceResult
   * @access public
   */
  public $SaveInvoiceResult;

  /**
   * 
   * @param WSResultStatus $SaveInvoiceResult
   * @access public
   */
  public function __construct($SaveInvoiceResult)
  {
    $this->SaveInvoiceResult = $SaveInvoiceResult;
  }

}
