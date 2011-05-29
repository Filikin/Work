<?php

class InvoiceBase
{

  /**
   * 
   * @var int $InvoiceID
   * @access public
   */
  public $InvoiceID;

  /**
   * 
   * @var int $AccountID
   * @access public
   */
  public $AccountID;

  /**
   * 
   * @var string $AreaID
   * @access public
   */
  public $AreaID;

  /**
   * 
   * @var string $CurrencyCode
   * @access public
   */
  public $CurrencyCode;

  /**
   * 
   * @var string $CurrrencyCode
   * @access public
   */
  public $CurrrencyCode;

  /**
   * 
   * @var string $AccountTaxCode
   * @access public
   */
  public $AccountTaxCode;

  /**
   * 
   * @var string $PaymentMethodID
   * @access public
   */
  public $PaymentMethodID;

  /**
   * 
   * @var string $ShipmentViaID
   * @access public
   */
  public $ShipmentViaID;

  /**
   * 
   * @var string $InvoiceNumber
   * @access public
   */
  public $InvoiceNumber;

  /**
   * 
   * @var string $ExternalReference
   * @access public
   */
  public $ExternalReference;

  /**
   * 
   * @var dateTime $CreationDate
   * @access public
   */
  public $CreationDate;

  /**
   * 
   * @var dateTime $InvoiceDate
   * @access public
   */
  public $InvoiceDate;

  /**
   * 
   * @var dateTime $DeliveryDate
   * @access public
   */
  public $DeliveryDate;

  /**
   * 
   * @var InvoiceStatus $Status
   * @access public
   */
  public $Status;

  /**
   * 
   * @var string $AccountName
   * @access public
   */
  public $AccountName;

  /**
   * 
   * @var string $AccountAddress1
   * @access public
   */
  public $AccountAddress1;

  /**
   * 
   * @var string $AccountAddress2
   * @access public
   */
  public $AccountAddress2;

  /**
   * 
   * @var string $City
   * @access public
   */
  public $City;

  /**
   * 
   * @var string $County_State
   * @access public
   */
  public $County_State;

  /**
   * 
   * @var string $Country
   * @access public
   */
  public $Country;

  /**
   * 
   * @var string $PostCode
   * @access public
   */
  public $PostCode;

  /**
   * 
   * @var string $DeliveryAccountName
   * @access public
   */
  public $DeliveryAccountName;

  /**
   * 
   * @var string $DeliveryAccountAddress1
   * @access public
   */
  public $DeliveryAccountAddress1;

  /**
   * 
   * @var string $DeliveryAccountAddress2
   * @access public
   */
  public $DeliveryAccountAddress2;

  /**
   * 
   * @var string $DeliveryCity
   * @access public
   */
  public $DeliveryCity;

  /**
   * 
   * @var string $DeliveryCounty_State
   * @access public
   */
  public $DeliveryCounty_State;

  /**
   * 
   * @var string $DeliveryCountry
   * @access public
   */
  public $DeliveryCountry;

  /**
   * 
   * @var string $DeliveryPostCode
   * @access public
   */
  public $DeliveryPostCode;

  /**
   * 
   * @var string $Contact
   * @access public
   */
  public $Contact;

  /**
   * 
   * @var string $AuthorUserID
   * @access public
   */
  public $AuthorUserID;

  /**
   * 
   * @var string $Phone
   * @access public
   */
  public $Phone;

  /**
   * 
   * @var string $Notes
   * @access public
   */
  public $Notes;

  /**
   * 
   * @var float $DiscountRate
   * @access public
   */
  public $DiscountRate;

  /**
   * 
   * @var boolean $ForCollection
   * @access public
   */
  public $ForCollection;

  /**
   * 
   * @var float $ExchangeRate
   * @access public
   */
  public $ExchangeRate;

  /**
   * 
   * @var boolean $UseAccountTaxCode
   * @access public
   */
  public $UseAccountTaxCode;

  /**
   * 
   * @var int $OrderID
   * @access public
   */
  public $OrderID;

  /**
   * 
   * @var string $OrderNumber
   * @access public
   */
  public $OrderNumber;

  /**
   * 
   * @var string $DepartmentID
   * @access public
   */
  public $DepartmentID;

  /**
   * 
   * @var int $Hold
   * @access public
   */
  public $Hold;

  /**
   * 
   * @var LedgerType $Ledger
   * @access public
   */
  public $Ledger;

  /**
   * 
   * @var string $RowVersionNumber
   * @access public
   */
  public $RowVersionNumber;

  /**
   * 
   * @var array $Lines
   * @access public
   */
  public $Lines;

  /**
   * 
   * @var boolean $IsPrinted
   * @access public
   */
  public $IsPrinted;

  /**
   * 
   * @var int $AccountBranchID
   * @access public
   */
  public $AccountBranchID;

  /**
   * 
   * @var dateTime $OrderDate
   * @access public
   */
  public $OrderDate;

  /**
   * 
   * @var boolean $ExcludeFromPrinting
   * @access public
   */
  public $ExcludeFromPrinting;

  /**
   * 
   * @var InvoiceType $Type
   * @access public
   */
  public $Type;

  /**
   * 
   * @var float $NetAmount
   * @access public
   */
  public $NetAmount;

  /**
   * 
   * @var float $TaxAmount
   * @access public
   */
  public $TaxAmount;

  /**
   * 
   * @var float $GrossAmount
   * @access public
   */
  public $GrossAmount;

  /**
   * 
   * @var float $BCNetAmount
   * @access public
   */
  public $BCNetAmount;

  /**
   * 
   * @var float $BCTaxAmount
   * @access public
   */
  public $BCTaxAmount;

  /**
   * 
   * @var float $BCGrossAmount
   * @access public
   */
  public $BCGrossAmount;

  /**
   * 
   * @param int $InvoiceID
   * @param int $AccountID
   * @param string $AreaID
   * @param string $CurrencyCode
   * @param string $CurrrencyCode
   * @param string $AccountTaxCode
   * @param string $PaymentMethodID
   * @param string $ShipmentViaID
   * @param string $InvoiceNumber
   * @param string $ExternalReference
   * @param dateTime $CreationDate
   * @param dateTime $InvoiceDate
   * @param dateTime $DeliveryDate
   * @param InvoiceStatus $Status
   * @param string $AccountName
   * @param string $AccountAddress1
   * @param string $AccountAddress2
   * @param string $City
   * @param string $County_State
   * @param string $Country
   * @param string $PostCode
   * @param string $DeliveryAccountName
   * @param string $DeliveryAccountAddress1
   * @param string $DeliveryAccountAddress2
   * @param string $DeliveryCity
   * @param string $DeliveryCounty_State
   * @param string $DeliveryCountry
   * @param string $DeliveryPostCode
   * @param string $Contact
   * @param string $AuthorUserID
   * @param string $Phone
   * @param string $Notes
   * @param float $DiscountRate
   * @param boolean $ForCollection
   * @param float $ExchangeRate
   * @param boolean $UseAccountTaxCode
   * @param int $OrderID
   * @param string $OrderNumber
   * @param string $DepartmentID
   * @param int $Hold
   * @param LedgerType $Ledger
   * @param string $RowVersionNumber
   * @param array $Lines
   * @param boolean $IsPrinted
   * @param int $AccountBranchID
   * @param dateTime $OrderDate
   * @param boolean $ExcludeFromPrinting
   * @param InvoiceType $Type
   * @param float $NetAmount
   * @param float $TaxAmount
   * @param float $GrossAmount
   * @param float $BCNetAmount
   * @param float $BCTaxAmount
   * @param float $BCGrossAmount
   * @access public
   */
  public function __construct($InvoiceID, $AccountID, $AreaID, $CurrencyCode, $CurrrencyCode, $AccountTaxCode, $PaymentMethodID, $ShipmentViaID, $InvoiceNumber, $ExternalReference, $CreationDate, $InvoiceDate, $DeliveryDate, $Status, $AccountName, $AccountAddress1, $AccountAddress2, $City, $County_State, $Country, $PostCode, $DeliveryAccountName, $DeliveryAccountAddress1, $DeliveryAccountAddress2, $DeliveryCity, $DeliveryCounty_State, $DeliveryCountry, $DeliveryPostCode, $Contact, $AuthorUserID, $Phone, $Notes, $DiscountRate, $ForCollection, $ExchangeRate, $UseAccountTaxCode, $OrderID, $OrderNumber, $DepartmentID, $Hold, $Ledger, $RowVersionNumber, $Lines, $IsPrinted, $AccountBranchID, $OrderDate, $ExcludeFromPrinting, $Type, $NetAmount, $TaxAmount, $GrossAmount, $BCNetAmount, $BCTaxAmount, $BCGrossAmount)
  {
    $this->InvoiceID = $InvoiceID;
    $this->AccountID = $AccountID;
    $this->AreaID = $AreaID;
    $this->CurrencyCode = $CurrencyCode;
    $this->CurrrencyCode = $CurrrencyCode;
    $this->AccountTaxCode = $AccountTaxCode;
    $this->PaymentMethodID = $PaymentMethodID;
    $this->ShipmentViaID = $ShipmentViaID;
    $this->InvoiceNumber = $InvoiceNumber;
    $this->ExternalReference = $ExternalReference;
    $this->CreationDate = $CreationDate;
    $this->InvoiceDate = $InvoiceDate;
    $this->DeliveryDate = $DeliveryDate;
    $this->Status = $Status;
    $this->AccountName = $AccountName;
    $this->AccountAddress1 = $AccountAddress1;
    $this->AccountAddress2 = $AccountAddress2;
    $this->City = $City;
    $this->County_State = $County_State;
    $this->Country = $Country;
    $this->PostCode = $PostCode;
    $this->DeliveryAccountName = $DeliveryAccountName;
    $this->DeliveryAccountAddress1 = $DeliveryAccountAddress1;
    $this->DeliveryAccountAddress2 = $DeliveryAccountAddress2;
    $this->DeliveryCity = $DeliveryCity;
    $this->DeliveryCounty_State = $DeliveryCounty_State;
    $this->DeliveryCountry = $DeliveryCountry;
    $this->DeliveryPostCode = $DeliveryPostCode;
    $this->Contact = $Contact;
    $this->AuthorUserID = $AuthorUserID;
    $this->Phone = $Phone;
    $this->Notes = $Notes;
    $this->DiscountRate = $DiscountRate;
    $this->ForCollection = $ForCollection;
    $this->ExchangeRate = $ExchangeRate;
    $this->UseAccountTaxCode = $UseAccountTaxCode;
    $this->OrderID = $OrderID;
    $this->OrderNumber = $OrderNumber;
    $this->DepartmentID = $DepartmentID;
    $this->Hold = $Hold;
    $this->Ledger = $Ledger;
    $this->RowVersionNumber = $RowVersionNumber;
    $this->Lines = $Lines;
    $this->IsPrinted = $IsPrinted;
    $this->AccountBranchID = $AccountBranchID;
    $this->OrderDate = $OrderDate;
    $this->ExcludeFromPrinting = $ExcludeFromPrinting;
    $this->Type = $Type;
    $this->NetAmount = $NetAmount;
    $this->TaxAmount = $TaxAmount;
    $this->GrossAmount = $GrossAmount;
    $this->BCNetAmount = $BCNetAmount;
    $this->BCTaxAmount = $BCTaxAmount;
    $this->BCGrossAmount = $BCGrossAmount;
  }

}
