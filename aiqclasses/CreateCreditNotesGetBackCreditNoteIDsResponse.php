<?php

class CreateCreditNotesGetBackCreditNoteIDsResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfWSResultStatus $CreateCreditNotesGetBackCreditNoteIDsResult
   * @access public
   */
  public $CreateCreditNotesGetBackCreditNoteIDsResult;

  /**
   * 
   * @var array $creditNoteIDs
   * @access public
   */
  public $creditNoteIDs;

  /**
   * 
   * @param WSResult2OfArrayOfWSResultStatus $CreateCreditNotesGetBackCreditNoteIDsResult
   * @param array $creditNoteIDs
   * @access public
   */
  public function __construct($CreateCreditNotesGetBackCreditNoteIDsResult, $creditNoteIDs)
  {
    $this->CreateCreditNotesGetBackCreditNoteIDsResult = $CreateCreditNotesGetBackCreditNoteIDsResult;
    $this->creditNoteIDs = $creditNoteIDs;
  }

}
