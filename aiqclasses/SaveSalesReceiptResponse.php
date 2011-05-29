<?php

class SaveSalesReceiptResponse
{

  /**
   * 
   * @var WSResult2OfBoolean $SaveSalesReceiptResult
   * @access public
   */
  public $SaveSalesReceiptResult;

  /**
   * 
   * @param WSResult2OfBoolean $SaveSalesReceiptResult
   * @access public
   */
  public function __construct($SaveSalesReceiptResult)
  {
    $this->SaveSalesReceiptResult = $SaveSalesReceiptResult;
  }

}
