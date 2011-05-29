<?php

class GetOrdersByCustomerCodeResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfOrder $GetOrdersByCustomerCodeResult
   * @access public
   */
  public $GetOrdersByCustomerCodeResult;

  /**
   * 
   * @param WSResult2OfArrayOfOrder $GetOrdersByCustomerCodeResult
   * @access public
   */
  public function __construct($GetOrdersByCustomerCodeResult)
  {
    $this->GetOrdersByCustomerCodeResult = $GetOrdersByCustomerCodeResult;
  }

}
