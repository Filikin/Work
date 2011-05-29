<?php

class UpdateCustomerResponse
{

  /**
   * 
   * @var WSResult2OfBoolean $UpdateCustomerResult
   * @access public
   */
  public $UpdateCustomerResult;

  /**
   * 
   * @param WSResult2OfBoolean $UpdateCustomerResult
   * @access public
   */
  public function __construct($UpdateCustomerResult)
  {
    $this->UpdateCustomerResult = $UpdateCustomerResult;
  }

}
