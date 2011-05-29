<?php

class GetSupplierBalanceInformationResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfAccountBalanceInformation $GetSupplierBalanceInformationResult
   * @access public
   */
  public $GetSupplierBalanceInformationResult;

  /**
   * 
   * @param WSResult2OfArrayOfAccountBalanceInformation $GetSupplierBalanceInformationResult
   * @access public
   */
  public function __construct($GetSupplierBalanceInformationResult)
  {
    $this->GetSupplierBalanceInformationResult = $GetSupplierBalanceInformationResult;
  }

}
