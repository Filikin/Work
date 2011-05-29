<?php

class SaveStockItemResponse
{

  /**
   * 
   * @var WSResultStatus $SaveStockItemResult
   * @access public
   */
  public $SaveStockItemResult;

  /**
   * 
   * @param WSResultStatus $SaveStockItemResult
   * @access public
   */
  public function __construct($SaveStockItemResult)
  {
    $this->SaveStockItemResult = $SaveStockItemResult;
  }

}
