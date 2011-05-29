<?php

class CustomerStatement
{

  /**
   * 
   * @var CustomerState $CustomerState
   * @access public
   */
  public $CustomerState;

  /**
   * 
   * @var array $TransactionList
   * @access public
   */
  public $TransactionList;

  /**
   * 
   * @param CustomerState $CustomerState
   * @param array $TransactionList
   * @access public
   */
  public function __construct($CustomerState, $TransactionList)
  {
    $this->CustomerState = $CustomerState;
    $this->TransactionList = $TransactionList;
  }

}
