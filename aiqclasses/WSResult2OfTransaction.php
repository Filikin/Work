<?php

class WSResult2OfTransaction
{

  /**
   * 
   * @var Transaction $Result
   * @access public
   */
  public $Result;

  /**
   * 
   * @param Transaction $Result
   * @access public
   */
  public function __construct($Result)
  {
    $this->Result = $Result;
  }

}
