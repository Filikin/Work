<?php

class CreateGeneralJournalResponse
{

  /**
   * 
   * @var WSResultStatus $CreateGeneralJournalResult
   * @access public
   */
  public $CreateGeneralJournalResult;

  /**
   * 
   * @param WSResultStatus $CreateGeneralJournalResult
   * @access public
   */
  public function __construct($CreateGeneralJournalResult)
  {
    $this->CreateGeneralJournalResult = $CreateGeneralJournalResult;
  }

}
