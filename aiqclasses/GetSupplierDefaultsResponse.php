<?php

class GetSupplierDefaultsResponse
{

  /**
   * 
   * @var WSResult2OfAccountDefaults $GetSupplierDefaultsResult
   * @access public
   */
  public $GetSupplierDefaultsResult;

  /**
   * 
   * @param WSResult2OfAccountDefaults $GetSupplierDefaultsResult
   * @access public
   */
  public function __construct($GetSupplierDefaultsResult)
  {
    $this->GetSupplierDefaultsResult = $GetSupplierDefaultsResult;
  }

}
