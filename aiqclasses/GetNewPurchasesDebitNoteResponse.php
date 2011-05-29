<?php

class GetNewPurchasesDebitNoteResponse
{

  /**
   * 
   * @var WSResult2OfCreditNote $GetNewPurchasesDebitNoteResult
   * @access public
   */
  public $GetNewPurchasesDebitNoteResult;

  /**
   * 
   * @param WSResult2OfCreditNote $GetNewPurchasesDebitNoteResult
   * @access public
   */
  public function __construct($GetNewPurchasesDebitNoteResult)
  {
    $this->GetNewPurchasesDebitNoteResult = $GetNewPurchasesDebitNoteResult;
  }

}
