<?php

class GetCustomerBalanceInformation
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var dateTime $edt
   * @access public
   */
  public $edt;

  /**
   * 
   * @var array $customerCodes
   * @access public
   */
  public $customerCodes;

  /**
   * 
   * @param string $token
   * @param dateTime $edt
   * @param array $customerCodes
   * @access public
   */
  public function __construct($token, $edt, $customerCodes)
  {
    $this->token = $token;
    $this->edt = $edt;
    $this->customerCodes = $customerCodes;
  }

}
