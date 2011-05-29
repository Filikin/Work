<?php

class GetNewBatchPurchasesDebitNoteResponse
{

  /**
   * 
   * @var WSResult2OfBatchPurchasesDebitNote $GetNewBatchPurchasesDebitNoteResult
   * @access public
   */
  public $GetNewBatchPurchasesDebitNoteResult;

  /**
   * 
   * @param WSResult2OfBatchPurchasesDebitNote $GetNewBatchPurchasesDebitNoteResult
   * @access public
   */
  public function __construct($GetNewBatchPurchasesDebitNoteResult)
  {
    $this->GetNewBatchPurchasesDebitNoteResult = $GetNewBatchPurchasesDebitNoteResult;
  }

}
