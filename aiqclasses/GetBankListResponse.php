<?php

class GetBankListResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfBank $GetBankListResult
   * @access public
   */
  public $GetBankListResult;

  /**
   * 
   * @param WSResult2OfArrayOfBank $GetBankListResult
   * @access public
   */
  public function __construct($GetBankListResult)
  {
    $this->GetBankListResult = $GetBankListResult;
  }

}
