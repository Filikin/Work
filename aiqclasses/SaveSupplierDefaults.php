<?php

class SaveSupplierDefaults
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var AccountDefaults $supplierDefaults
   * @access public
   */
  public $supplierDefaults;

  /**
   * 
   * @param string $token
   * @param AccountDefaults $supplierDefaults
   * @access public
   */
  public function __construct($token, $supplierDefaults)
  {
    $this->token = $token;
    $this->supplierDefaults = $supplierDefaults;
  }

}
