<?php

class GetInactiveStockItemList
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @param string $token
   * @access public
   */
  public function __construct($token)
  {
    $this->token = $token;
  }

}
