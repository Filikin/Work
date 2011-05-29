<?php

class SaveCustomerDefaultsResponse
{

  /**
   * 
   * @var WSResultStatus $SaveCustomerDefaultsResult
   * @access public
   */
  public $SaveCustomerDefaultsResult;

  /**
   * 
   * @param WSResultStatus $SaveCustomerDefaultsResult
   * @access public
   */
  public function __construct($SaveCustomerDefaultsResult)
  {
    $this->SaveCustomerDefaultsResult = $SaveCustomerDefaultsResult;
  }

}
