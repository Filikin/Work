<?php

class CreateBatchSalesCreditNoteResponse
{

  /**
   * 
   * @var WSResult2OfString $CreateBatchSalesCreditNoteResult
   * @access public
   */
  public $CreateBatchSalesCreditNoteResult;

  /**
   * 
   * @param WSResult2OfString $CreateBatchSalesCreditNoteResult
   * @access public
   */
  public function __construct($CreateBatchSalesCreditNoteResult)
  {
    $this->CreateBatchSalesCreditNoteResult = $CreateBatchSalesCreditNoteResult;
  }

}
