<?php

class GetPriceListsResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfPriceList $GetPriceListsResult
   * @access public
   */
  public $GetPriceListsResult;

  /**
   * 
   * @param WSResult2OfArrayOfPriceList $GetPriceListsResult
   * @access public
   */
  public function __construct($GetPriceListsResult)
  {
    $this->GetPriceListsResult = $GetPriceListsResult;
  }

}
