<?php

class WSResult2OfBatchSalesCreditNote
{

  /**
   * 
   * @var BatchSalesCreditNote $Result
   * @access public
   */
  public $Result;

  /**
   * 
   * @param BatchSalesCreditNote $Result
   * @access public
   */
  public function __construct($Result)
  {
    $this->Result = $Result;
  }

}
