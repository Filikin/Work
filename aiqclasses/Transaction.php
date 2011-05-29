<?php

class Transaction
{

  /**
   * 
   * @var array $Lines
   * @access public
   */
  public $Lines;

  /**
   * 
   * @var Type $TransactionType
   * @access public
   */
  public $TransactionType;

  /**
   * 
   * @param array $Lines
   * @param Type $TransactionType
   * @access public
   */
  public function __construct($Lines, $TransactionType)
  {
    $this->Lines = $Lines;
    $this->TransactionType = $TransactionType;
  }

}
