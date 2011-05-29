<?php

class DeliverOrderLines
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var Order $order
   * @access public
   */
  public $order;

  /**
   * 
   * @var array $lines
   * @access public
   */
  public $lines;

  /**
   * 
   * @param string $token
   * @param Order $order
   * @param array $lines
   * @access public
   */
  public function __construct($token, $order, $lines)
  {
    $this->token = $token;
    $this->order = $order;
    $this->lines = $lines;
  }

}
