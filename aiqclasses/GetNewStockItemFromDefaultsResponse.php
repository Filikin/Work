<?php

class GetNewStockItemFromDefaultsResponse
{

  /**
   * 
   * @var WSResult2OfStockItem $GetNewStockItemFromDefaultsResult
   * @access public
   */
  public $GetNewStockItemFromDefaultsResult;

  /**
   * 
   * @param WSResult2OfStockItem $GetNewStockItemFromDefaultsResult
   * @access public
   */
  public function __construct($GetNewStockItemFromDefaultsResult)
  {
    $this->GetNewStockItemFromDefaultsResult = $GetNewStockItemFromDefaultsResult;
  }

}
