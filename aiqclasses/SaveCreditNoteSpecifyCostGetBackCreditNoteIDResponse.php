<?php

class SaveCreditNoteSpecifyCostGetBackCreditNoteIDResponse
{

  /**
   * 
   * @var WSResultStatus $SaveCreditNoteSpecifyCostGetBackCreditNoteIDResult
   * @access public
   */
  public $SaveCreditNoteSpecifyCostGetBackCreditNoteIDResult;

  /**
   * 
   * @var int $creditNoteID
   * @access public
   */
  public $creditNoteID;

  /**
   * 
   * @param WSResultStatus $SaveCreditNoteSpecifyCostGetBackCreditNoteIDResult
   * @param int $creditNoteID
   * @access public
   */
  public function __construct($SaveCreditNoteSpecifyCostGetBackCreditNoteIDResult, $creditNoteID)
  {
    $this->SaveCreditNoteSpecifyCostGetBackCreditNoteIDResult = $SaveCreditNoteSpecifyCostGetBackCreditNoteIDResult;
    $this->creditNoteID = $creditNoteID;
  }

}
