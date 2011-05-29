<?php

class GetNewSupplierFromDefaultsResponse
{

  /**
   * 
   * @var WSResult2OfSupplier $GetNewSupplierFromDefaultsResult
   * @access public
   */
  public $GetNewSupplierFromDefaultsResult;

  /**
   * 
   * @param WSResult2OfSupplier $GetNewSupplierFromDefaultsResult
   * @access public
   */
  public function __construct($GetNewSupplierFromDefaultsResult)
  {
    $this->GetNewSupplierFromDefaultsResult = $GetNewSupplierFromDefaultsResult;
  }

}
