<?php

class GetStockItemDefaultsResponse
{

  /**
   * 
   * @var WSResult2OfStockItemDefaults $GetStockItemDefaultsResult
   * @access public
   */
  public $GetStockItemDefaultsResult;

  /**
   * 
   * @param WSResult2OfStockItemDefaults $GetStockItemDefaultsResult
   * @access public
   */
  public function __construct($GetStockItemDefaultsResult)
  {
    $this->GetStockItemDefaultsResult = $GetStockItemDefaultsResult;
  }

}
