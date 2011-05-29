<?php

class GetBankDefaultsResponse
{

  /**
   * 
   * @var WSResult2OfBankDefaults $GetBankDefaultsResult
   * @access public
   */
  public $GetBankDefaultsResult;

  /**
   * 
   * @param WSResult2OfBankDefaults $GetBankDefaultsResult
   * @access public
   */
  public function __construct($GetBankDefaultsResult)
  {
    $this->GetBankDefaultsResult = $GetBankDefaultsResult;
  }

}
