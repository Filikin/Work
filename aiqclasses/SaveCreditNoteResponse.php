<?php

class SaveCreditNoteResponse
{

  /**
   * 
   * @var WSResultStatus $SaveCreditNoteResult
   * @access public
   */
  public $SaveCreditNoteResult;

  /**
   * 
   * @param WSResultStatus $SaveCreditNoteResult
   * @access public
   */
  public function __construct($SaveCreditNoteResult)
  {
    $this->SaveCreditNoteResult = $SaveCreditNoteResult;
  }

}
