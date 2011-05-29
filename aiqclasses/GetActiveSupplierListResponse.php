<?php

class GetActiveSupplierListResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfSupplier $GetActiveSupplierListResult
   * @access public
   */
  public $GetActiveSupplierListResult;

  /**
   * 
   * @param WSResult2OfArrayOfSupplier $GetActiveSupplierListResult
   * @access public
   */
  public function __construct($GetActiveSupplierListResult)
  {
    $this->GetActiveSupplierListResult = $GetActiveSupplierListResult;
  }

}
