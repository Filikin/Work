<?php

class SaveSupplierDefaultsResponse
{

  /**
   * 
   * @var WSResultStatus $SaveSupplierDefaultsResult
   * @access public
   */
  public $SaveSupplierDefaultsResult;

  /**
   * 
   * @param WSResultStatus $SaveSupplierDefaultsResult
   * @access public
   */
  public function __construct($SaveSupplierDefaultsResult)
  {
    $this->SaveSupplierDefaultsResult = $SaveSupplierDefaultsResult;
  }

}
