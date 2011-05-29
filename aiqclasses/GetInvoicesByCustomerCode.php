<?php

class GetInvoicesByCustomerCode
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var string $customerCode
   * @access public
   */
  public $customerCode;

  /**
   * 
   * @param string $token
   * @param string $customerCode
   * @access public
   */
  public function __construct($token, $customerCode)
  {
    $this->token = $token;
    $this->customerCode = $customerCode;
  }

}
