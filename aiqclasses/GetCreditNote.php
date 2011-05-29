<?php

class GetCreditNote
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var int $creditNoteID
   * @access public
   */
  public $creditNoteID;

  /**
   * 
   * @param string $token
   * @param int $creditNoteID
   * @access public
   */
  public function __construct($token, $creditNoteID)
  {
    $this->token = $token;
    $this->creditNoteID = $creditNoteID;
  }

}
