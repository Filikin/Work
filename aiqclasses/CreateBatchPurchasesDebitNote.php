<?php

class CreateBatchPurchasesDebitNote
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var BatchPurchasesDebitNote $debitNote
   * @access public
   */
  public $debitNote;

  /**
   * 
   * @param string $token
   * @param BatchPurchasesDebitNote $debitNote
   * @access public
   */
  public function __construct($token, $debitNote)
  {
    $this->token = $token;
    $this->debitNote = $debitNote;
  }

}
