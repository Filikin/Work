<?php

class GetSupplierResponse
{

  /**
   * 
   * @var WSResult2OfSupplier $GetSupplierResult
   * @access public
   */
  public $GetSupplierResult;

  /**
   * 
   * @param WSResult2OfSupplier $GetSupplierResult
   * @access public
   */
  public function __construct($GetSupplierResult)
  {
    $this->GetSupplierResult = $GetSupplierResult;
  }

}
