<?php

class PurchasePayment
{

  /**
   * 
   * @var string $SupplierCode
   * @access public
   */
  public $SupplierCode;

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
   * @param string $SupplierCode
   * @param string $CheckReference
   * @param float $PaymentAmount
   * @param string $BankAccountCode
   * @param dateTime $PaymentDate
   * @param float $ExchangeRate
   * @param float $BankExchangeRate
   * @param string $Description
   * @param string $DepartmentID
   * @access public
   */
  public function __construct($SupplierCode, $CheckReference, $PaymentAmount, $BankAccountCode, $PaymentDate, $ExchangeRate, $BankExchangeRate, $Description, $DepartmentID)
  {
    $this->SupplierCode = $SupplierCode;
    $this->CheckReference = $CheckReference;
    $this->PaymentAmount = $PaymentAmount;
    $this->BankAccountCode = $BankAccountCode;
    $this->PaymentDate = $PaymentDate;
    $this->ExchangeRate = $ExchangeRate;
    $this->BankExchangeRate = $BankExchangeRate;
    $this->Description = $Description;
    $this->DepartmentID = $DepartmentID;
  }

}
