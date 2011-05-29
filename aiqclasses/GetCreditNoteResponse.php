<?php

class GetCreditNoteResponse
{

  /**
   * 
   * @var WSResult2OfCreditNote $GetCreditNoteResult
   * @access public
   */
  public $GetCreditNoteResult;

  /**
   * 
   * @param WSResult2OfCreditNote $GetCreditNoteResult
   * @access public
   */
  public function __construct($GetCreditNoteResult)
  {
    $this->GetCreditNoteResult = $GetCreditNoteResult;
  }

}
