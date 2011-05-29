<?php

class AccountBalanceInformation
{

  /**
   * 
   * @var int $AccountID
   * @access public
   */
  public $AccountID;

  /**
   * 
   * @var string $AccountCode
   * @access public
   */
  public $AccountCode;

  /**
   * 
   * @var string $AccountType
   * @access public
   */
  public $AccountType;

  /**
   * 
   * @var float $Balance
   * @access public
   */
  public $Balance;

  /**
   * 
   * @var float $CreditLimit
   * @access public
   */
  public $CreditLimit;

  /**
   * 
   * @var float $CreditLeft
   * @access public
   */
  public $CreditLeft;

  /**
   * 
   * @var float $OverCreditLimitBalance
   * @access public
   */
  public $OverCreditLimitBalance;

  /**
   * 
   * @param int $AccountID
   * @param string $AccountCode
   * @param string $AccountType
   * @param float $Balance
   * @param float $CreditLimit
   * @param float $CreditLeft
   * @param float $OverCreditLimitBalance
   * @access public
   */
  public function __construct($AccountID, $AccountCode, $AccountType, $Balance, $CreditLimit, $CreditLeft, $OverCreditLimitBalance)
  {
    $this->AccountID = $AccountID;
    $this->AccountCode = $AccountCode;
    $this->AccountType = $AccountType;
    $this->Balance = $Balance;
    $this->CreditLimit = $CreditLimit;
    $this->CreditLeft = $CreditLeft;
    $this->OverCreditLimitBalance = $OverCreditLimitBalance;
  }

}
