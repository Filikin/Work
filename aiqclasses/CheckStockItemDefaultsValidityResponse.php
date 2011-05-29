<?php

class CheckStockItemDefaultsValidityResponse
{

  /**
   * 
   * @var WSResult2OfBoolean $CheckStockItemDefaultsValidityResult
   * @access public
   */
  public $CheckStockItemDefaultsValidityResult;

  /**
   * 
   * @param WSResult2OfBoolean $CheckStockItemDefaultsValidityResult
   * @access public
   */
  public function __construct($CheckStockItemDefaultsValidityResult)
  {
    $this->CheckStockItemDefaultsValidityResult = $CheckStockItemDefaultsValidityResult;
  }

}
