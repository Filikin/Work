<?php

class GetStockItemLocationStatusResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfStockItemLocationStatus $GetStockItemLocationStatusResult
   * @access public
   */
  public $GetStockItemLocationStatusResult;

  /**
   * 
   * @param WSResult2OfArrayOfStockItemLocationStatus $GetStockItemLocationStatusResult
   * @access public
   */
  public function __construct($GetStockItemLocationStatusResult)
  {
    $this->GetStockItemLocationStatusResult = $GetStockItemLocationStatusResult;
  }

}
