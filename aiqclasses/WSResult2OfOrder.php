<?php

class WSResult2OfOrder
{

  /**
   * 
   * @var Order $Result
   * @access public
   */
  public $Result;

  /**
   * 
   * @param Order $Result
   * @access public
   */
  public function __construct($Result)
  {
    $this->Result = $Result;
  }

}
