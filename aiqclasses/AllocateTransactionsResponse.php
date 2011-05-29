<?php

class AllocateTransactionsResponse
{

  /**
   * 
   * @var WSResultStatus $AllocateTransactionsResult
   * @access public
   */
  public $AllocateTransactionsResult;

  /**
   * 
   * @param WSResultStatus $AllocateTransactionsResult
   * @access public
   */
  public function __construct($AllocateTransactionsResult)
  {
    $this->AllocateTransactionsResult = $AllocateTransactionsResult;
  }

}
