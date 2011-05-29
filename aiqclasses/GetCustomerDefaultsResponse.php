<?php

class GetCustomerDefaultsResponse
{

  /**
   * 
   * @var WSResult2OfAccountDefaults $GetCustomerDefaultsResult
   * @access public
   */
  public $GetCustomerDefaultsResult;

  /**
   * 
   * @param WSResult2OfAccountDefaults $GetCustomerDefaultsResult
   * @access public
   */
  public function __construct($GetCustomerDefaultsResult)
  {
    $this->GetCustomerDefaultsResult = $GetCustomerDefaultsResult;
  }

}
