<?php

class GetAccountBalanceInformationResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfAccountBalanceInformation $GetAccountBalanceInformationResult
   * @access public
   */
  public $GetAccountBalanceInformationResult;

  /**
   * 
   * @param WSResult2OfArrayOfAccountBalanceInformation $GetAccountBalanceInformationResult
   * @access public
   */
  public function __construct($GetAccountBalanceInformationResult)
  {
    $this->GetAccountBalanceInformationResult = $GetAccountBalanceInformationResult;
  }

}
