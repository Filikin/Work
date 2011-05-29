<?php

class CreateBatchSalesCreditNote
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var BatchSalesCreditNote $creditNote
   * @access public
   */
  public $creditNote;

  /**
   * 
   * @param string $token
   * @param BatchSalesCreditNote $creditNote
   * @access public
   */
  public function __construct($token, $creditNote)
  {
    $this->token = $token;
    $this->creditNote = $creditNote;
  }

}
