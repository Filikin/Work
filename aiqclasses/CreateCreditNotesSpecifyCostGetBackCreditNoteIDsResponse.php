<?php

class CreateCreditNotesSpecifyCostGetBackCreditNoteIDsResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfWSResultStatus $CreateCreditNotesSpecifyCostGetBackCreditNoteIDsResult
   * @access public
   */
  public $CreateCreditNotesSpecifyCostGetBackCreditNoteIDsResult;

  /**
   * 
   * @var array $creditNoteIDs
   * @access public
   */
  public $creditNoteIDs;

  /**
   * 
   * @param WSResult2OfArrayOfWSResultStatus $CreateCreditNotesSpecifyCostGetBackCreditNoteIDsResult
   * @param array $creditNoteIDs
   * @access public
   */
  public function __construct($CreateCreditNotesSpecifyCostGetBackCreditNoteIDsResult, $creditNoteIDs)
  {
    $this->CreateCreditNotesSpecifyCostGetBackCreditNoteIDsResult = $CreateCreditNotesSpecifyCostGetBackCreditNoteIDsResult;
    $this->creditNoteIDs = $creditNoteIDs;
  }

}
