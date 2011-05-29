<?php

class SaveStockItemDefaultsResponse
{

  /**
   * 
   * @var WSResultStatus $SaveStockItemDefaultsResult
   * @access public
   */
  public $SaveStockItemDefaultsResult;

  /**
   * 
   * @param WSResultStatus $SaveStockItemDefaultsResult
   * @access public
   */
  public function __construct($SaveStockItemDefaultsResult)
  {
    $this->SaveStockItemDefaultsResult = $SaveStockItemDefaultsResult;
  }

}
