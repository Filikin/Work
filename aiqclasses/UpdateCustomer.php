<?php

class UpdateCustomer
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var Customer $customer
   * @access public
   */
  public $customer;

  /**
   * 
   * @var boolean $create
   * @access public
   */
  public $create;

  /**
   * 
   * @param string $token
   * @param Customer $customer
   * @param boolean $create
   * @access public
   */
  public function __construct($token, $customer, $create)
  {
    $this->token = $token;
    $this->customer = $customer;
    $this->create = $create;
  }

}
