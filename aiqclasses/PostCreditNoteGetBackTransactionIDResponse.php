<?php

class PostCreditNoteGetBackTransactionIDResponse
{

  /**
   * 
   * @var WSResultStatus $PostCreditNoteGetBackTransactionIDResult
   * @access public
   */
  public $PostCreditNoteGetBackTransactionIDResult;

  /**
   * 
   * @var int $transactionID
   * @access public
   */
  public $transactionID;

  /**
   * 
   * @param WSResultStatus $PostCreditNoteGetBackTransactionIDResult
   * @param int $transactionID
   * @access public
   */
  public function __construct($PostCreditNoteGetBackTransactionIDResult, $transactionID)
  {
    $this->PostCreditNoteGetBackTransactionIDResult = $PostCreditNoteGetBackTransactionIDResult;
    $this->transactionID = $transactionID;
  }

}
