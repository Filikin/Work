<?php

class SaveOrder
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
   * @var boolean $create
   * @access public
   */
  public $create;

  /**
   * 
   * @param string $token
   * @param Order $order
   * @param boolean $create
   * @access public
   */
  public function __construct($token, $order, $create)
  {
    $this->token = $token;
    $this->order = $order;
    $this->create = $create;
  }

}
