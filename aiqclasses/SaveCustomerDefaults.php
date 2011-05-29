<?php

class SaveCustomerDefaults
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var AccountDefaults $customerDefaults
   * @access public
   */
  public $customerDefaults;

  /**
   * 
   * @param string $token
   * @param AccountDefaults $customerDefaults
   * @access public
   */
  public function __construct($token, $customerDefaults)
  {
    $this->token = $token;
    $this->customerDefaults = $customerDefaults;
  }

}
