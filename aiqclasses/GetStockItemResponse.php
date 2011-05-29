<?php

class GetStockItemResponse
{

  /**
   * 
   * @var WSResult2OfStockItem $GetStockItemResult
   * @access public
   */
  public $GetStockItemResult;

  /**
   * 
   * @param WSResult2OfStockItem $GetStockItemResult
   * @access public
   */
  public function __construct($GetStockItemResult)
  {
    $this->GetStockItemResult = $GetStockItemResult;
  }

}
