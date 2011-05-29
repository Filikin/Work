<?php

class SalesReceipt
{

  /**
   * 
   * @var string $CustomerCode
   * @access public
   */
  public $CustomerCode;

  /**
   * 
   * @var string $CheckReference
   * @access public
   */
  public $CheckReference;

  /**
   * 
   * @var float $PaymentAmount
   * @access public
   */
  public $PaymentAmount;

  /**
   * 
   * @var string $BankAccountCode
   * @access public
   */
  public $BankAccountCode;

  /**
   * 
   * @var string $LodgmentNumber
   * @access public
   */
  public $LodgmentNumber;

  /**
   * 
   * @var dateTime $PaymentDate
   * @access public
   */
  public $PaymentDate;

  /**
   * 
   * @var float $ExchangeRate
   * @access public
   */
  public $ExchangeRate;

  /**
   * 
   * @var float $BankExchangeRate
   * @access public
   */
  public $BankExchangeRate;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description;

  /**
   * 
   * @var string $DepartmentID
   * @access public
   */
  public $DepartmentID;

  /**
   * 
   * @param string $CustomerCode
   * @param string $CheckReference
   * @param float $PaymentAmount
   * @param string $BankAccountCode
   * @param string $LodgmentNumber
   * @param dateTime $PaymentDate
   * @param float $ExchangeRate
   * @param float $BankExchangeRate
   * @param string $Description
   * @param string $DepartmentID
   * @access public
   */
  public function __construct($CustomerCode, $CheckReference, $PaymentAmount, $BankAccountCode, $LodgmentNumber, $PaymentDate, $ExchangeRate, $BankExchangeRate, $Description, $DepartmentID)
  {
    $this->CustomerCode = $CustomerCode;
    $this->CheckReference = $CheckReference;
    $this->PaymentAmount = $PaymentAmount;
    $this->BankAccountCode = $BankAccountCode;
    $this->LodgmentNumber = $LodgmentNumber;
    $this->PaymentDate = $PaymentDate;
    $this->ExchangeRate = $ExchangeRate;
    $this->BankExchangeRate = $BankExchangeRate;
    $this->Description = $Description;
    $this->DepartmentID = $DepartmentID;
  }

}
