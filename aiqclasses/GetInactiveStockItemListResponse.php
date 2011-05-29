<?php

class GetInactiveStockItemListResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfStockItem $GetInactiveStockItemListResult
   * @access public
   */
  public $GetInactiveStockItemListResult;

  /**
   * 
   * @param WSResult2OfArrayOfStockItem $GetInactiveStockItemListResult
   * @access public
   */
  public function __construct($GetInactiveStockItemListResult)
  {
    $this->GetInactiveStockItemListResult = $GetInactiveStockItemListResult;
  }

}
