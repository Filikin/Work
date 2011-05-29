<?php

class GetCustomersStatementResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfCustomerStatement $GetCustomersStatementResult
   * @access public
   */
  public $GetCustomersStatementResult;

  /**
   * 
   * @param WSResult2OfArrayOfCustomerStatement $GetCustomersStatementResult
   * @access public
   */
  public function __construct($GetCustomersStatementResult)
  {
    $this->GetCustomersStatementResult = $GetCustomersStatementResult;
  }

}
