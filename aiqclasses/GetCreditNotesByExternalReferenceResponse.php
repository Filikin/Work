<?php

class GetCreditNotesByExternalReferenceResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfCreditNote $GetCreditNotesByExternalReferenceResult
   * @access public
   */
  public $GetCreditNotesByExternalReferenceResult;

  /**
   * 
   * @param WSResult2OfArrayOfCreditNote $GetCreditNotesByExternalReferenceResult
   * @access public
   */
  public function __construct($GetCreditNotesByExternalReferenceResult)
  {
    $this->GetCreditNotesByExternalReferenceResult = $GetCreditNotesByExternalReferenceResult;
  }

}
