<?php

class GetOrder
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var int $orderID
   * @access public
   */
  public $orderID;

  /**
   * 
   * @param string $token
   * @param int $orderID
   * @access public
   */
  public function __construct($token, $orderID)
  {
    $this->token = $token;
    $this->orderID = $orderID;
  }

}
