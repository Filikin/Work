<?php

class SaveCreditNote
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var CreditNote $creditNote
   * @access public
   */
  public $creditNote;

  /**
   * 
   * @var boolean $create
   * @access public
   */
  public $create;

  /**
   * 
   * @param string $token
   * @param CreditNote $creditNote
   * @param boolean $create
   * @access public
   */
  public function __construct($token, $creditNote, $create)
  {
    $this->token = $token;
    $this->creditNote = $creditNote;
    $this->create = $create;
  }

}
