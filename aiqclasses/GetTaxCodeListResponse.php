<?php

class GetTaxCodeListResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfTax $GetTaxCodeListResult
   * @access public
   */
  public $GetTaxCodeListResult;

  /**
   * 
   * @param WSResult2OfArrayOfTax $GetTaxCodeListResult
   * @access public
   */
  public function __construct($GetTaxCodeListResult)
  {
    $this->GetTaxCodeListResult = $GetTaxCodeListResult;
  }

}
