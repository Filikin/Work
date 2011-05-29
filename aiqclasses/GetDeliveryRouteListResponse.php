<?php

class GetDeliveryRouteListResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfDeliveryRoute $GetDeliveryRouteListResult
   * @access public
   */
  public $GetDeliveryRouteListResult;

  /**
   * 
   * @param WSResult2OfArrayOfDeliveryRoute $GetDeliveryRouteListResult
   * @access public
   */
  public function __construct($GetDeliveryRouteListResult)
  {
    $this->GetDeliveryRouteListResult = $GetDeliveryRouteListResult;
  }

}
