<?php

class PostInvoiceGetBackTransactionIDResponse
{

  /**
   * 
   * @var WSResultStatus $PostInvoiceGetBackTransactionIDResult
   * @access public
   */
  public $PostInvoiceGetBackTransactionIDResult;

  /**
   * 
   * @var int $transactionID
   * @access public
   */
  public $transactionID;

  /**
   * 
   * @param WSResultStatus $PostInvoiceGetBackTransactionIDResult
   * @param int $transactionID
   * @access public
   */
  public function __construct($PostInvoiceGetBackTransactionIDResult, $transactionID)
  {
    $this->PostInvoiceGetBackTransactionIDResult = $PostInvoiceGetBackTransactionIDResult;
    $this->transactionID = $transactionID;
  }

}
