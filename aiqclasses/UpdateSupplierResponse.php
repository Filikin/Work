<?php

class UpdateSupplierResponse
{

  /**
   * 
   * @var WSResult2OfBoolean $UpdateSupplierResult
   * @access public
   */
  public $UpdateSupplierResult;

  /**
   * 
   * @param WSResult2OfBoolean $UpdateSupplierResult
   * @access public
   */
  public function __construct($UpdateSupplierResult)
  {
    $this->UpdateSupplierResult = $UpdateSupplierResult;
  }

}
