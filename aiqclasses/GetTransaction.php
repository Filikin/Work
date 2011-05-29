<?php

class GetTransaction
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var int $transactionID
   * @access public
   */
  public $transactionID;

  /**
   * 
   * @param string $token
   * @param int $transactionID
   * @access public
   */
  public function __construct($token, $transactionID)
  {
    $this->token = $token;
    $this->transactionID = $transactionID;
  }

}
