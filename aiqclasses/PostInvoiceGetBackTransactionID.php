<?php

class PostInvoiceGetBackTransactionID
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var int $invoiceID
   * @access public
   */
  public $invoiceID;

  /**
   * 
   * @param string $token
   * @param int $invoiceID
   * @access public
   */
  public function __construct($token, $invoiceID)
  {
    $this->token = $token;
    $this->invoiceID = $invoiceID;
  }

}
