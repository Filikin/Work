<?php

class CreateGeneralJournal
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var GeneralJournal $journal
   * @access public
   */
  public $journal;

  /**
   * 
   * @param string $token
   * @param GeneralJournal $journal
   * @access public
   */
  public function __construct($token, $journal)
  {
    $this->token = $token;
    $this->journal = $journal;
  }

}
