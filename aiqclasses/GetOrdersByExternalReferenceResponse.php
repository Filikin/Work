<?php

class GetOrdersByExternalReferenceResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfOrder $GetOrdersByExternalReferenceResult
   * @access public
   */
  public $GetOrdersByExternalReferenceResult;

  /**
   * 
   * @param WSResult2OfArrayOfOrder $GetOrdersByExternalReferenceResult
   * @access public
   */
  public function __construct($GetOrdersByExternalReferenceResult)
  {
    $this->GetOrdersByExternalReferenceResult = $GetOrdersByExternalReferenceResult;
  }

}
