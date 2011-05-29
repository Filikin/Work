<?php

class GetStockItemLocationStatus
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var array $stockItemIDs
   * @access public
   */
  public $stockItemIDs;

  /**
   * 
   * @param string $token
   * @param array $stockItemIDs
   * @access public
   */
  public function __construct($token, $stockItemIDs)
  {
    $this->token = $token;
    $this->stockItemIDs = $stockItemIDs;
  }

}
