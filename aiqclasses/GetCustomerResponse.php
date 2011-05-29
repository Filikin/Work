<?php

class GetCustomerResponse
{

  /**
   * 
   * @var WSResult2OfCustomer $GetCustomerResult
   * @access public
   */
  public $GetCustomerResult;

  /**
   * 
   * @param WSResult2OfCustomer $GetCustomerResult
   * @access public
   */
  public function __construct($GetCustomerResult)
  {
    $this->GetCustomerResult = $GetCustomerResult;
  }

}
