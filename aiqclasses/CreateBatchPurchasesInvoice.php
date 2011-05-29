<?php

class CreateBatchPurchasesInvoice
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var BatchPurchasesInvoice $inv
   * @access public
   */
  public $inv;

  /**
   * 
   * @param string $token
   * @param BatchPurchasesInvoice $inv
   * @access public
   */
  public function __construct($token, $inv)
  {
    $this->token = $token;
    $this->inv = $inv;
  }

}
