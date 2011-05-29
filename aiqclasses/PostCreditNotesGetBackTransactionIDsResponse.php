<?php

class PostCreditNotesGetBackTransactionIDsResponse
{

  /**
   * 
   * @var array $PostCreditNotesGetBackTransactionIDsResult
   * @access public
   */
  public $PostCreditNotesGetBackTransactionIDsResult;

  /**
   * 
   * @var array $transactionIDs
   * @access public
   */
  public $transactionIDs;

  /**
   * 
   * @param array $PostCreditNotesGetBackTransactionIDsResult
   * @param array $transactionIDs
   * @access public
   */
  public function __construct($PostCreditNotesGetBackTransactionIDsResult, $transactionIDs)
  {
    $this->PostCreditNotesGetBackTransactionIDsResult = $PostCreditNotesGetBackTransactionIDsResult;
    $this->transactionIDs = $transactionIDs;
  }

}
