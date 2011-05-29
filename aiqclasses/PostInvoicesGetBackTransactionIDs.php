<?php

class PostInvoicesGetBackTransactionIDs
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var array $invoiceIDs
   * @access public
   */
  public $invoiceIDs;

  /**
   * 
   * @param string $token
   * @param array $invoiceIDs
   * @access public
   */
  public function __construct($token, $invoiceIDs)
  {
    $this->token = $token;
    $this->invoiceIDs = $invoiceIDs;
  }

}
