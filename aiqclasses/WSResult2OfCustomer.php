<?php

class WSResult2OfCustomer
{

  /**
   * 
   * @var Customer $Result
   * @access public
   */
  public $Result;

  /**
   * 
   * @param Customer $Result
   * @access public
   */
  public function __construct($Result)
  {
    $this->Result = $Result;
  }

}
