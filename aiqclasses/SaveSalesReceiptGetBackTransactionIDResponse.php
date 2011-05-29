<?php

class SaveSalesReceiptGetBackTransactionIDResponse
{

  /**
   * 
   * @var WSResultStatus $SaveSalesReceiptGetBackTransactionIDResult
   * @access public
   */
  public $SaveSalesReceiptGetBackTransactionIDResult;

  /**
   * 
   * @var int $transactionID
   * @access public
   */
  public $transactionID;

  /**
   * 
   * @param WSResultStatus $SaveSalesReceiptGetBackTransactionIDResult
   * @param int $transactionID
   * @access public
   */
  public function __construct($SaveSalesReceiptGetBackTransactionIDResult, $transactionID)
  {
    $this->SaveSalesReceiptGetBackTransactionIDResult = $SaveSalesReceiptGetBackTransactionIDResult;
    $this->transactionID = $transactionID;
  }

}
