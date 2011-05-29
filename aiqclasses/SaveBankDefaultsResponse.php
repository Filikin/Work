<?php

class SaveBankDefaultsResponse
{

  /**
   * 
   * @var WSResultStatus $SaveBankDefaultsResult
   * @access public
   */
  public $SaveBankDefaultsResult;

  /**
   * 
   * @param WSResultStatus $SaveBankDefaultsResult
   * @access public
   */
  public function __construct($SaveBankDefaultsResult)
  {
    $this->SaveBankDefaultsResult = $SaveBankDefaultsResult;
  }

}
