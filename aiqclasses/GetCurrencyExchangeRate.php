<?php

class GetCurrencyExchangeRate
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var string $currencyCode
   * @access public
   */
  public $currencyCode;

  /**
   * 
   * @param string $token
   * @param string $currencyCode
   * @access public
   */
  public function __construct($token, $currencyCode)
  {
    $this->token = $token;
    $this->currencyCode = $currencyCode;
  }

}
