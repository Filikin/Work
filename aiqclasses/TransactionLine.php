<?php

class TransactionLine
{

  /**
   * 
   * @var int $TransactionLineID
   * @access public
   */
  public $TransactionLineID;

  /**
   * 
   * @var int $TransactionID
   * @access public
   */
  public $TransactionID;

  /**
   * 
   * @var int $AccountID
   * @access public
   */
  public $AccountID;

  /**
   * 
   * @var int $BankID
   * @access public
   */
  public $BankID;

  /**
   * 
   * @var string $CurrencyCode
   * @access public
   */
  public $CurrencyCode;

  /**
   * 
   * @var string $TaxCode
   * @access public
   */
  public $TaxCode;

  /**
   * 
   * @var string $AuthorUserID
   * @access public
   */
  public $AuthorUserID;

  /**
   * 
   * @var int $TransactionGroupNumber
   * @access public
   */
  public $TransactionGroupNumber;

  /**
   * 
   * @var string $GLAccountCode
   * @access public
   */
  public $GLAccountCode;

  /**
   * 
   * @var string $TransactionLineType
   * @access public
   */
  public $TransactionLineType;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description;

  /**
   * 
   * @var string $InternalNumber
   * @access public
   */
  public $InternalNumber;

  /**
   * 
   * @var string $ExternalReference
   * @access public
   */
  public $ExternalReference;

  /**
   * 
   * @var boolean $IsInDispute
   * @access public
   */
  public $IsInDispute;

  /**
   * 
   * @var dateTime $CreationDate
   * @access public
   */
  public $CreationDate;

  /**
   * 
   * @var dateTime $TransactionDate
   * @access public
   */
  public $TransactionDate;

  /**
   * 
   * @var dateTime $PeriodDate
   * @access public
   */
  public $PeriodDate;

  /**
   * 
   * @var float $Amount
   * @access public
   */
  public $Amount;

  /**
   * 
   * @var float $AllocatedAmount
   * @access public
   */
  public $AllocatedAmount;

  /**
   * 
   * @var float $BCAmount
   * @access public
   */
  public $BCAmount;

  /**
   * 
   * @var float $ExchangeRate
   * @access public
   */
  public $ExchangeRate;

  /**
   * 
   * @var boolean $Reconciled
   * @access public
   */
  public $Reconciled;

  /**
   * 
   * @var int $BankstatementID
   * @access public
   */
  public $BankstatementID;

  /**
   * 
   * @var int $PeriodID
   * @access public
   */
  public $PeriodID;

  /**
   * 
   * @var int $InvoiceID
   * @access public
   */
  public $InvoiceID;

  /**
   * 
   * @var string $AllocationNumber
   * @access public
   */
  public $AllocationNumber;

  /**
   * 
   * @var string $DepartmentID
   * @access public
   */
  public $DepartmentID;

  /**
   * 
   * @var RType $BroadType
   * @access public
   */
  public $BroadType;

  /**
   * 
   * @var boolean $IsReversed
   * @access public
   */
  public $IsReversed;

  /**
   * 
   * @var int $ReasonID
   * @access public
   */
  public $ReasonID;

  /**
   * 
   * @var int $SupplierBatchPaymentID
   * @access public
   */
  public $SupplierBatchPaymentID;

  /**
   * 
   * @var int $VatReturnID
   * @access public
   */
  public $VatReturnID;

  /**
   * 
   * @var float $SupplierBatchPaymentDiscountedAmount
   * @access public
   */
  public $SupplierBatchPaymentDiscountedAmount;

  /**
   * 
   * @var float $SupplierBatchPaymentAllocatedAmount
   * @access public
   */
  public $SupplierBatchPaymentAllocatedAmount;

  /**
   * 
   * @var string $LodgmentNumber
   * @access public
   */
  public $LodgmentNumber;

  /**
   * 
   * @var string $RowVersionNumber
   * @access public
   */
  public $RowVersionNumber;

  /**
   * 
   * @var boolean $IsBankLine
   * @access public
   */
  public $IsBankLine;

  /**
   * 
   * @var boolean $IsAccountControlLine
   * @access public
   */
  public $IsAccountControlLine;

  /**
   * 
   * @param int $TransactionLineID
   * @param int $TransactionID
   * @param int $AccountID
   * @param int $BankID
   * @param string $CurrencyCode
   * @param string $TaxCode
   * @param string $AuthorUserID
   * @param int $TransactionGroupNumber
   * @param string $GLAccountCode
   * @param string $TransactionLineType
   * @param string $Description
   * @param string $InternalNumber
   * @param string $ExternalReference
   * @param boolean $IsInDispute
   * @param dateTime $CreationDate
   * @param dateTime $TransactionDate
   * @param dateTime $PeriodDate
   * @param float $Amount
   * @param float $AllocatedAmount
   * @param float $BCAmount
   * @param float $ExchangeRate
   * @param boolean $Reconciled
   * @param int $BankstatementID
   * @param int $PeriodID
   * @param int $InvoiceID
   * @param string $AllocationNumber
   * @param string $DepartmentID
   * @param RType $BroadType
   * @param boolean $IsReversed
   * @param int $ReasonID
   * @param int $SupplierBatchPaymentID
   * @param int $VatReturnID
   * @param float $SupplierBatchPaymentDiscountedAmount
   * @param float $SupplierBatchPaymentAllocatedAmount
   * @param string $LodgmentNumber
   * @param string $RowVersionNumber
   * @param boolean $IsBankLine
   * @param boolean $IsAccountControlLine
   * @access public
   */
  public function __construct($TransactionLineID, $TransactionID, $AccountID, $BankID, $CurrencyCode, $TaxCode, $AuthorUserID, $TransactionGroupNumber, $GLAccountCode, $TransactionLineType, $Description, $InternalNumber, $ExternalReference, $IsInDispute, $CreationDate, $TransactionDate, $PeriodDate, $Amount, $AllocatedAmount, $BCAmount, $ExchangeRate, $Reconciled, $BankstatementID, $PeriodID, $InvoiceID, $AllocationNumber, $DepartmentID, $BroadType, $IsReversed, $ReasonID, $SupplierBatchPaymentID, $VatReturnID, $SupplierBatchPaymentDiscountedAmount, $SupplierBatchPaymentAllocatedAmount, $LodgmentNumber, $RowVersionNumber, $IsBankLine, $IsAccountControlLine)
  {
    $this->TransactionLineID = $TransactionLineID;
    $this->TransactionID = $TransactionID;
    $this->AccountID = $AccountID;
    $this->BankID = $BankID;
    $this->CurrencyCode = $CurrencyCode;
    $this->TaxCode = $TaxCode;
    $this->AuthorUserID = $AuthorUserID;
    $this->TransactionGroupNumber = $TransactionGroupNumber;
    $this->GLAccountCode = $GLAccountCode;
    $this->TransactionLineType = $TransactionLineType;
    $this->Description = $Description;
    $this->InternalNumber = $InternalNumber;
    $this->ExternalReference = $ExternalReference;
    $this->IsInDispute = $IsInDispute;
    $this->CreationDate = $CreationDate;
    $this->TransactionDate = $TransactionDate;
    $this->PeriodDate = $PeriodDate;
    $this->Amount = $Amount;
    $this->AllocatedAmount = $AllocatedAmount;
    $this->BCAmount = $BCAmount;
    $this->ExchangeRate = $ExchangeRate;
    $this->Reconciled = $Reconciled;
    $this->BankstatementID = $BankstatementID;
    $this->PeriodID = $PeriodID;
    $this->InvoiceID = $InvoiceID;
    $this->AllocationNumber = $AllocationNumber;
    $this->DepartmentID = $DepartmentID;
    $this->BroadType = $BroadType;
    $this->IsReversed = $IsReversed;
    $this->ReasonID = $ReasonID;
    $this->SupplierBatchPaymentID = $SupplierBatchPaymentID;
    $this->VatReturnID = $VatReturnID;
    $this->SupplierBatchPaymentDiscountedAmount = $SupplierBatchPaymentDiscountedAmount;
    $this->SupplierBatchPaymentAllocatedAmount = $SupplierBatchPaymentAllocatedAmount;
    $this->LodgmentNumber = $LodgmentNumber;
    $this->RowVersionNumber = $RowVersionNumber;
    $this->IsBankLine = $IsBankLine;
    $this->IsAccountControlLine = $IsAccountControlLine;
  }

}
