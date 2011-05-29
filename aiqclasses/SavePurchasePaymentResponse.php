<?php

class SavePurchasePaymentResponse
{

  /**
   * 
   * @var WSResult2OfBoolean $SavePurchasePaymentResult
   * @access public
   */
  public $SavePurchasePaymentResult;

  /**
   * 
   * @param WSResult2OfBoolean $SavePurchasePaymentResult
   * @access public
   */
  public function __construct($SavePurchasePaymentResult)
  {
    $this->SavePurchasePaymentResult = $SavePurchasePaymentResult;
  }

}
