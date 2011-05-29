<?php

class GetNewPurchasesInvoices
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var array $supplierCodes
   * @access public
   */
  public $supplierCodes;

  /**
   * 
   * @param string $token
   * @param array $supplierCodes
   * @access public
   */
  public function __construct($token, $supplierCodes)
  {
    $this->token = $token;
    $this->supplierCodes = $supplierCodes;
  }

}
