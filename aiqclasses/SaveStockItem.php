<?php

class SaveStockItem
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var StockItem $stockItem
   * @access public
   */
  public $stockItem;

  /**
   * 
   * @var boolean $create
   * @access public
   */
  public $create;

  /**
   * 
   * @param string $token
   * @param StockItem $stockItem
   * @param boolean $create
   * @access public
   */
  public function __construct($token, $stockItem, $create)
  {
    $this->token = $token;
    $this->stockItem = $stockItem;
    $this->create = $create;
  }

}
