<?php

class GetActiveStockItemListResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfStockItem $GetActiveStockItemListResult
   * @access public
   */
  public $GetActiveStockItemListResult;

  /**
   * 
   * @param WSResult2OfArrayOfStockItem $GetActiveStockItemListResult
   * @access public
   */
  public function __construct($GetActiveStockItemListResult)
  {
    $this->GetActiveStockItemListResult = $GetActiveStockItemListResult;
  }

}
