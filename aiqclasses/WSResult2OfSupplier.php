<?php

class WSResult2OfSupplier
{

  /**
   * 
   * @var Supplier $Result
   * @access public
   */
  public $Result;

  /**
   * 
   * @param Supplier $Result
   * @access public
   */
  public function __construct($Result)
  {
    $this->Result = $Result;
  }

}
