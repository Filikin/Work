<?php

class GetNewSalesCreditNotes
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var array $customerCodes
   * @access public
   */
  public $customerCodes;

  /**
   * 
   * @param string $token
   * @param array $customerCodes
   * @access public
   */
  public function __construct($token, $customerCodes)
  {
    $this->token = $token;
    $this->customerCodes = $customerCodes;
  }

}
