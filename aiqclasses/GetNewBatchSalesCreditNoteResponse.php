<?php

class GetNewBatchSalesCreditNoteResponse
{

  /**
   * 
   * @var WSResult2OfBatchSalesCreditNote $GetNewBatchSalesCreditNoteResult
   * @access public
   */
  public $GetNewBatchSalesCreditNoteResult;

  /**
   * 
   * @param WSResult2OfBatchSalesCreditNote $GetNewBatchSalesCreditNoteResult
   * @access public
   */
  public function __construct($GetNewBatchSalesCreditNoteResult)
  {
    $this->GetNewBatchSalesCreditNoteResult = $GetNewBatchSalesCreditNoteResult;
  }

}
