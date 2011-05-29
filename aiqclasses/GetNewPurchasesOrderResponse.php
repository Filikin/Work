<?php

class GetNewPurchasesOrderResponse
{

  /**
   * 
   * @var WSResult2OfOrder $GetNewPurchasesOrderResult
   * @access public
   */
  public $GetNewPurchasesOrderResult;

  /**
   * 
   * @param WSResult2OfOrder $GetNewPurchasesOrderResult
   * @access public
   */
  public function __construct($GetNewPurchasesOrderResult)
  {
    $this->GetNewPurchasesOrderResult = $GetNewPurchasesOrderResult;
  }

}
