<?php

class GetCustomersStatement
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var dateTime $upTo
   * @access public
   */
  public $upTo;

  /**
   * 
   * @var array $customerCodes
   * @access public
   */
  public $customerCodes;

  /**
   * 
   * @var boolean $showZeros
   * @access public
   */
  public $showZeros;

  /**
   * 
   * @param string $token
   * @param dateTime $upTo
   * @param array $customerCodes
   * @param boolean $showZeros
   * @access public
   */
  public function __construct($token, $upTo, $customerCodes, $showZeros)
  {
    $this->token = $token;
    $this->upTo = $upTo;
    $this->customerCodes = $customerCodes;
    $this->showZeros = $showZeros;
  }

}
