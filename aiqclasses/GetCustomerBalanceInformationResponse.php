<?php

class GetCustomerBalanceInformationResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfAccountBalanceInformation $GetCustomerBalanceInformationResult
   * @access public
   */
  public $GetCustomerBalanceInformationResult;

  /**
   * 
   * @param WSResult2OfArrayOfAccountBalanceInformation $GetCustomerBalanceInformationResult
   * @access public
   */
  public function __construct($GetCustomerBalanceInformationResult)
  {
    $this->GetCustomerBalanceInformationResult = $GetCustomerBalanceInformationResult;
  }

}
