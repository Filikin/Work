<?php

class GetOrderResponse
{

  /**
   * 
   * @var WSResult2OfOrder $GetOrderResult
   * @access public
   */
  public $GetOrderResult;

  /**
   * 
   * @param WSResult2OfOrder $GetOrderResult
   * @access public
   */
  public function __construct($GetOrderResult)
  {
    $this->GetOrderResult = $GetOrderResult;
  }

}
