<?php

class GetNewSalesCreditNoteResponse
{

  /**
   * 
   * @var WSResult2OfCreditNote $GetNewSalesCreditNoteResult
   * @access public
   */
  public $GetNewSalesCreditNoteResult;

  /**
   * 
   * @param WSResult2OfCreditNote $GetNewSalesCreditNoteResult
   * @access public
   */
  public function __construct($GetNewSalesCreditNoteResult)
  {
    $this->GetNewSalesCreditNoteResult = $GetNewSalesCreditNoteResult;
  }

}
