<?php

class CreateCreditNotesGetBackCreditNoteIDs
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var array $creditNotes
   * @access public
   */
  public $creditNotes;

  /**
   * 
   * @param string $token
   * @param array $creditNotes
   * @access public
   */
  public function __construct($token, $creditNotes)
  {
    $this->token = $token;
    $this->creditNotes = $creditNotes;
  }

}
