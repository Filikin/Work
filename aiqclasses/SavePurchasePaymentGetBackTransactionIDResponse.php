<?php

class SavePurchasePaymentGetBackTransactionIDResponse
{

  /**
   * 
   * @var WSResultStatus $SavePurchasePaymentGetBackTransactionIDResult
   * @access public
   */
  public $SavePurchasePaymentGetBackTransactionIDResult;

  /**
   * 
   * @var int $transactionID
   * @access public
   */
  public $transactionID;

  /**
   * 
   * @param WSResultStatus $SavePurchasePaymentGetBackTransactionIDResult
   * @param int $transactionID
   * @access public
   */
  public function __construct($SavePurchasePaymentGetBackTransactionIDResult, $transactionID)
  {
    $this->SavePurchasePaymentGetBackTransactionIDResult = $SavePurchasePaymentGetBackTransactionIDResult;
    $this->transactionID = $transactionID;
  }

}
