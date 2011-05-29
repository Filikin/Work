<?php

class PostCreditNoteResponse
{

  /**
   * 
   * @var WSResultStatus $PostCreditNoteResult
   * @access public
   */
  public $PostCreditNoteResult;

  /**
   * 
   * @param WSResultStatus $PostCreditNoteResult
   * @access public
   */
  public function __construct($PostCreditNoteResult)
  {
    $this->PostCreditNoteResult = $PostCreditNoteResult;
  }

}
