<?php

class SaveStockItemDefaults
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var StockItemDefaults $stockItemDefaults
   * @access public
   */
  public $stockItemDefaults;

  /**
   * 
   * @param string $token
   * @param StockItemDefaults $stockItemDefaults
   * @access public
   */
  public function __construct($token, $stockItemDefaults)
  {
    $this->token = $token;
    $this->stockItemDefaults = $stockItemDefaults;
  }

}
