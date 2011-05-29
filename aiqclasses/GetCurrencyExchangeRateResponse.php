<?php

class GetCurrencyExchangeRateResponse
{

  /**
   * 
   * @var WSResult2OfDecimal $GetCurrencyExchangeRateResult
   * @access public
   */
  public $GetCurrencyExchangeRateResult;

  /**
   * 
   * @param WSResult2OfDecimal $GetCurrencyExchangeRateResult
   * @access public
   */
  public function __construct($GetCurrencyExchangeRateResult)
  {
    $this->GetCurrencyExchangeRateResult = $GetCurrencyExchangeRateResult;
  }

}
