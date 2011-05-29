<?php

class SaveInvoiceSpecifyCostGetBackInvoiceID
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var Invoice $invoice
   * @access public
   */
  public $invoice;

  /**
   * 
   * @var boolean $create
   * @access public
   */
  public $create;

  /**
   * 
   * @param string $token
   * @param Invoice $invoice
   * @param boolean $create
   * @access public
   */
  public function __construct($token, $invoice, $create)
  {
    $this->token = $token;
    $this->invoice = $invoice;
    $this->create = $create;
  }

}
