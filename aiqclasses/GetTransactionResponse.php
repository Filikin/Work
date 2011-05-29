<?php

class GetTransactionResponse
{

  /**
   * 
   * @var WSResult2OfTransaction $GetTransactionResult
   * @access public
   */
  public $GetTransactionResult;

  /**
   * 
   * @param WSResult2OfTransaction $GetTransactionResult
   * @access public
   */
  public function __construct($GetTransactionResult)
  {
    $this->GetTransactionResult = $GetTransactionResult;
  }

}
