<?php

class WSResult2OfStockItem
{

  /**
   * 
   * @var StockItem $Result
   * @access public
   */
  public $Result;

  /**
   * 
   * @param StockItem $Result
   * @access public
   */
  public function __construct($Result)
  {
    $this->Result = $Result;
  }

}
