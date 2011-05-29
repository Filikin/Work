<?php

class PostCreditNotesGetBackTransactionIDs
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var array $creditNoteIDs
   * @access public
   */
  public $creditNoteIDs;

  /**
   * 
   * @param string $token
   * @param array $creditNoteIDs
   * @access public
   */
  public function __construct($token, $creditNoteIDs)
  {
    $this->token = $token;
    $this->creditNoteIDs = $creditNoteIDs;
  }

}
