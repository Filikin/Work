<?php

class CreateBatchSalesInvoice
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var BatchSalesInvoice $inv
   * @access public
   */
  public $inv;

  /**
   * 
   * @param string $token
   * @param BatchSalesInvoice $inv
   * @access public
   */
  public function __construct($token, $inv)
  {
    $this->token = $token;
    $this->inv = $inv;
  }

}
