<?php

class GetNewBatchPurchasesInvoice
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var string $supplierCode
   * @access public
   */
  public $supplierCode;

  /**
   * 
   * @param string $token
   * @param string $supplierCode
   * @access public
   */
  public function __construct($token, $supplierCode)
  {
    $this->token = $token;
    $this->supplierCode = $supplierCode;
  }

}
