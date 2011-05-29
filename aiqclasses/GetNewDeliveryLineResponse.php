<?php

class GetNewDeliveryLineResponse
{

  /**
   * 
   * @var WSResult2OfDeliveryLine $GetNewDeliveryLineResult
   * @access public
   */
  public $GetNewDeliveryLineResult;

  /**
   * 
   * @param WSResult2OfDeliveryLine $GetNewDeliveryLineResult
   * @access public
   */
  public function __construct($GetNewDeliveryLineResult)
  {
    $this->GetNewDeliveryLineResult = $GetNewDeliveryLineResult;
  }

}
