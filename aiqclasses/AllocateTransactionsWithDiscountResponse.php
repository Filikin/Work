<?php

class AllocateTransactionsWithDiscountResponse
{

  /**
   * 
   * @var WSResultStatus $AllocateTransactionsWithDiscountResult
   * @access public
   */
  public $AllocateTransactionsWithDiscountResult;

  /**
   * 
   * @param WSResultStatus $AllocateTransactionsWithDiscountResult
   * @access public
   */
  public function __construct($AllocateTransactionsWithDiscountResult)
  {
    $this->AllocateTransactionsWithDiscountResult = $AllocateTransactionsWithDiscountResult;
  }

}
