<?php

class CreateBatchPurchasesDebitNoteResponse
{

  /**
   * 
   * @var WSResult2OfString $CreateBatchPurchasesDebitNoteResult
   * @access public
   */
  public $CreateBatchPurchasesDebitNoteResult;

  /**
   * 
   * @param WSResult2OfString $CreateBatchPurchasesDebitNoteResult
   * @access public
   */
  public function __construct($CreateBatchPurchasesDebitNoteResult)
  {
    $this->CreateBatchPurchasesDebitNoteResult = $CreateBatchPurchasesDebitNoteResult;
  }

}
