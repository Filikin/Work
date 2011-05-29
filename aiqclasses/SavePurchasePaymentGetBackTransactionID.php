<?php

class SavePurchasePaymentGetBackTransactionID
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var PurchasePayment $purchasePayment
   * @access public
   */
  public $purchasePayment;

  /**
   * 
   * @param string $token
   * @param PurchasePayment $purchasePayment
   * @access public
   */
  public function __construct($token, $purchasePayment)
  {
    $this->token = $token;
    $this->purchasePayment = $purchasePayment;
  }

}
