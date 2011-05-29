<?php

class SaveSalesReceiptGetBackTransactionID
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var SalesReceipt $salesReceipt
   * @access public
   */
  public $salesReceipt;

  /**
   * 
   * @param string $token
   * @param SalesReceipt $salesReceipt
   * @access public
   */
  public function __construct($token, $salesReceipt)
  {
    $this->token = $token;
    $this->salesReceipt = $salesReceipt;
  }

}
