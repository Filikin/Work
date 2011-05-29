<?php

class GetCurrencyListResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfString $GetCurrencyListResult
   * @access public
   */
  public $GetCurrencyListResult;

  /**
   * 
   * @param WSResult2OfArrayOfString $GetCurrencyListResult
   * @access public
   */
  public function __construct($GetCurrencyListResult)
  {
    $this->GetCurrencyListResult = $GetCurrencyListResult;
  }

}
