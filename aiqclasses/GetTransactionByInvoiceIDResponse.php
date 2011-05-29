<?php

class GetTransactionByInvoiceIDResponse
{

  /**
   * 
   * @var WSResult2OfTransaction $GetTransactionByInvoiceIDResult
   * @access public
   */
  public $GetTransactionByInvoiceIDResult;

  /**
   * 
   * @param WSResult2OfTransaction $GetTransactionByInvoiceIDResult
   * @access public
   */
  public function __construct($GetTransactionByInvoiceIDResult)
  {
    $this->GetTransactionByInvoiceIDResult = $GetTransactionByInvoiceIDResult;
  }

}
