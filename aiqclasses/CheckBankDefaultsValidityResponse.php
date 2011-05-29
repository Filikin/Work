<?php

class CheckBankDefaultsValidityResponse
{

  /**
   * 
   * @var WSResult2OfBoolean $CheckBankDefaultsValidityResult
   * @access public
   */
  public $CheckBankDefaultsValidityResult;

  /**
   * 
   * @param WSResult2OfBoolean $CheckBankDefaultsValidityResult
   * @access public
   */
  public function __construct($CheckBankDefaultsValidityResult)
  {
    $this->CheckBankDefaultsValidityResult = $CheckBankDefaultsValidityResult;
  }

}
