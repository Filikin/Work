<?php

class GetSupplierBalanceInformation
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
   * @var array $supplierCodes
   * @access public
   */
  public $supplierCodes;

  /**
   * 
   * @param string $token
   * @param dateTime $edt
   * @param array $supplierCodes
   * @access public
   */
  public function __construct($token, $edt, $supplierCodes)
  {
    $this->token = $token;
    $this->edt = $edt;
    $this->supplierCodes = $supplierCodes;
  }

}
