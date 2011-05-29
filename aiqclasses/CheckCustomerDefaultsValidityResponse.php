<?php

class CheckCustomerDefaultsValidityResponse
{

  /**
   * 
   * @var WSResult2OfBoolean $CheckCustomerDefaultsValidityResult
   * @access public
   */
  public $CheckCustomerDefaultsValidityResult;

  /**
   * 
   * @param WSResult2OfBoolean $CheckCustomerDefaultsValidityResult
   * @access public
   */
  public function __construct($CheckCustomerDefaultsValidityResult)
  {
    $this->CheckCustomerDefaultsValidityResult = $CheckCustomerDefaultsValidityResult;
  }

}
