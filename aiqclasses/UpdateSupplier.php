<?php

class UpdateSupplier
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var Supplier $supplier
   * @access public
   */
  public $supplier;

  /**
   * 
   * @var boolean $create
   * @access public
   */
  public $create;

  /**
   * 
   * @param string $token
   * @param Supplier $supplier
   * @param boolean $create
   * @access public
   */
  public function __construct($token, $supplier, $create)
  {
    $this->token = $token;
    $this->supplier = $supplier;
    $this->create = $create;
  }

}
