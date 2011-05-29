<?php

class PostInvoicesGetBackTransactionIDsResponse
{

  /**
   * 
   * @var array $PostInvoicesGetBackTransactionIDsResult
   * @access public
   */
  public $PostInvoicesGetBackTransactionIDsResult;

  /**
   * 
   * @var array $transactionIDs
   * @access public
   */
  public $transactionIDs;

  /**
   * 
   * @param array $PostInvoicesGetBackTransactionIDsResult
   * @param array $transactionIDs
   * @access public
   */
  public function __construct($PostInvoicesGetBackTransactionIDsResult, $transactionIDs)
  {
    $this->PostInvoicesGetBackTransactionIDsResult = $PostInvoicesGetBackTransactionIDsResult;
    $this->transactionIDs = $transactionIDs;
  }

}
