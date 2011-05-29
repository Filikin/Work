<?php

class GetStockItemListResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfStockItem $GetStockItemListResult
   * @access public
   */
  public $GetStockItemListResult;

  /**
   * 
   * @param WSResult2OfArrayOfStockItem $GetStockItemListResult
   * @access public
   */
  public function __construct($GetStockItemListResult)
  {
    $this->GetStockItemListResult = $GetStockItemListResult;
  }

}
