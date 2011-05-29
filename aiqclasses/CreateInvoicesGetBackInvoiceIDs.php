<?php

class CreateInvoicesGetBackInvoiceIDs
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var array $invoices
   * @access public
   */
  public $invoices;

  /**
   * 
   * @param string $token
   * @param array $invoices
   * @access public
   */
  public function __construct($token, $invoices)
  {
    $this->token = $token;
    $this->invoices = $invoices;
  }

}
