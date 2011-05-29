<?php

class GetActiveCustomerListResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfCustomer $GetActiveCustomerListResult
   * @access public
   */
  public $GetActiveCustomerListResult;

  /**
   * 
   * @param WSResult2OfArrayOfCustomer $GetActiveCustomerListResult
   * @access public
   */
  public function __construct($GetActiveCustomerListResult)
  {
    $this->GetActiveCustomerListResult = $GetActiveCustomerListResult;
  }

}
