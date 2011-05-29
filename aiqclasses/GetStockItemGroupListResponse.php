<?php

class GetStockItemGroupListResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfItemGroup $GetStockItemGroupListResult
   * @access public
   */
  public $GetStockItemGroupListResult;

  /**
   * 
   * @param WSResult2OfArrayOfItemGroup $GetStockItemGroupListResult
   * @access public
   */
  public function __construct($GetStockItemGroupListResult)
  {
    $this->GetStockItemGroupListResult = $GetStockItemGroupListResult;
  }

}
