<?php

class WSResult2OfStockItemDefaults
{

  /**
   * 
   * @var StockItemDefaults $Result
   * @access public
   */
  public $Result;

  /**
   * 
   * @param StockItemDefaults $Result
   * @access public
   */
  public function __construct($Result)
  {
    $this->Result = $Result;
  }

}
