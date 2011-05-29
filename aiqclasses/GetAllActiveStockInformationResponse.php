<?php

class GetAllActiveStockInformationResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfItemLocationSublocationInformation $GetAllActiveStockInformationResult
   * @access public
   */
  public $GetAllActiveStockInformationResult;

  /**
   * 
   * @param WSResult2OfArrayOfItemLocationSublocationInformation $GetAllActiveStockInformationResult
   * @access public
   */
  public function __construct($GetAllActiveStockInformationResult)
  {
    $this->GetAllActiveStockInformationResult = $GetAllActiveStockInformationResult;
  }

}
