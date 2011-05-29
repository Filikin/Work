<?php

class GetNewSalesOrderResponse
{

  /**
   * 
   * @var WSResult2OfOrder $GetNewSalesOrderResult
   * @access public
   */
  public $GetNewSalesOrderResult;

  /**
   * 
   * @param WSResult2OfOrder $GetNewSalesOrderResult
   * @access public
   */
  public function __construct($GetNewSalesOrderResult)
  {
    $this->GetNewSalesOrderResult = $GetNewSalesOrderResult;
  }

}
