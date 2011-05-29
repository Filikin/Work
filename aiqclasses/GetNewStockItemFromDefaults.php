<?php

class GetNewStockItemFromDefaults
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var string $stockItemID
   * @access public
   */
  public $stockItemID;

  /**
   * 
   * @param string $token
   * @param string $stockItemID
   * @access public
   */
  public function __construct($token, $stockItemID)
  {
    $this->token = $token;
    $this->stockItemID = $stockItemID;
  }

}
