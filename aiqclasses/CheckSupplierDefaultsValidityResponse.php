<?php

class CheckSupplierDefaultsValidityResponse
{

  /**
   * 
   * @var WSResult2OfBoolean $CheckSupplierDefaultsValidityResult
   * @access public
   */
  public $CheckSupplierDefaultsValidityResult;

  /**
   * 
   * @param WSResult2OfBoolean $CheckSupplierDefaultsValidityResult
   * @access public
   */
  public function __construct($CheckSupplierDefaultsValidityResult)
  {
    $this->CheckSupplierDefaultsValidityResult = $CheckSupplierDefaultsValidityResult;
  }

}
