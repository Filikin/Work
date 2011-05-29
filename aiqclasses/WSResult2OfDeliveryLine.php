<?php

class WSResult2OfDeliveryLine
{

  /**
   * 
   * @var DeliveryLine $Result
   * @access public
   */
  public $Result;

  /**
   * 
   * @param DeliveryLine $Result
   * @access public
   */
  public function __construct($Result)
  {
    $this->Result = $Result;
  }

}
