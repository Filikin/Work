<?php

class GetNewCustomerFromDefaultsResponse
{

  /**
   * 
   * @var WSResult2OfCustomer $GetNewCustomerFromDefaultsResult
   * @access public
   */
  public $GetNewCustomerFromDefaultsResult;

  /**
   * 
   * @param WSResult2OfCustomer $GetNewCustomerFromDefaultsResult
   * @access public
   */
  public function __construct($GetNewCustomerFromDefaultsResult)
  {
    $this->GetNewCustomerFromDefaultsResult = $GetNewCustomerFromDefaultsResult;
  }

}
