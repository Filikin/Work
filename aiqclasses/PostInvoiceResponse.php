<?php

class PostInvoiceResponse
{

  /**
   * 
   * @var WSResultStatus $PostInvoiceResult
   * @access public
   */
  public $PostInvoiceResult;

  /**
   * 
   * @param WSResultStatus $PostInvoiceResult
   * @access public
   */
  public function __construct($PostInvoiceResult)
  {
    $this->PostInvoiceResult = $PostInvoiceResult;
  }

}
