<?php

class Account
{

  /**
   * 
   * @var int $AccountID
   * @access public
   */
  public $AccountID;

  /**
   * 
   * @var LedgerType $LedgerType
   * @access public
   */
  public $LedgerType;

  /**
   * 
   * @var string $Code
   * @access public
   */
  public $Code;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name;

  /**
   * 
   * @var string $GroupID
   * @access public
   */
  public $GroupID;

  /**
   * 
   * @var string $DefaultTaxCode
   * @access public
   */
  public $DefaultTaxCode;

  /**
   * 
   * @var string $AreaID
   * @access public
   */
  public $AreaID;

  /**
   * 
   * @var string $BankAccountCode
   * @access public
   */
  public $BankAccountCode;

  /**
   * 
   * @var string $CountryID
   * @access public
   */
  public $CountryID;

  /**
   * 
   * @var string $CreditTermID
   * @access public
   */
  public $CreditTermID;

  /**
   * 
   * @var string $CurrencyCode
   * @access public
   */
  public $CurrencyCode;

  /**
   * 
   * @var string $PaymentMethodID
   * @access public
   */
  public $PaymentMethodID;

  /**
   * 
   * @var string $AuthorUserID
   * @access public
   */
  public $AuthorUserID;

  /**
   * 
   * @var string $ShipViaID
   * @access public
   */
  public $ShipViaID;

  /**
   * 
   * @var dateTime $CreationDate
   * @access public
   */
  public $CreationDate;

  /**
   * 
   * @var string $Address1
   * @access public
   */
  public $Address1;

  /**
   * 
   * @var string $Address2
   * @access public
   */
  public $Address2;

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
   * @var string $DeliveryName
   * @access public
   */
  public $DeliveryName;

  /**
   * 
   * @var string $DeliveryAddress1
   * @access public
   */
  public $DeliveryAddress1;

  /**
   * 
   * @var string $DeliveryAddress2
   * @access public
   */
  public $DeliveryAddress2;

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
   * @var string $DeliveryContact
   * @access public
   */
  public $DeliveryContact;

  /**
   * 
   * @var string $DeliveryPhone
   * @access public
   */
  public $DeliveryPhone;

  /**
   * 
   * @var string $DeliveryFax
   * @access public
   */
  public $DeliveryFax;

  /**
   * 
   * @var string $Phone
   * @access public
   */
  public $Phone;

  /**
   * 
   * @var string $Fax
   * @access public
   */
  public $Fax;

  /**
   * 
   * @var string $Email
   * @access public
   */
  public $Email;

  /**
   * 
   * @var string $WebAddress
   * @access public
   */
  public $WebAddress;

  /**
   * 
   * @var string $Contact
   * @access public
   */
  public $Contact;

  /**
   * 
   * @var string $VATRegistrationNumber
   * @access public
   */
  public $VATRegistrationNumber;

  /**
   * 
   * @var string $VATExemptReference
   * @access public
   */
  public $VATExemptReference;

  /**
   * 
   * @var float $DiscountRate
   * @access public
   */
  public $DiscountRate;

  /**
   * 
   * @var boolean $UseAccountTaxCode
   * @access public
   */
  public $UseAccountTaxCode;

  /**
   * 
   * @var string $DefaultGLAccountCode
   * @access public
   */
  public $DefaultGLAccountCode;

  /**
   * 
   * @var string $ControlGLAccountCode
   * @access public
   */
  public $ControlGLAccountCode;

  /**
   * 
   * @var boolean $IsActive
   * @access public
   */
  public $IsActive;

  /**
   * 
   * @var int $Hold
   * @access public
   */
  public $Hold;

  /**
   * 
   * @var int $HeadOfficeAccountID
   * @access public
   */
  public $HeadOfficeAccountID;

  /**
   * 
   * @var string $Notes
   * @access public
   */
  public $Notes;

  /**
   * 
   * @var boolean $UseHeadOffice
   * @access public
   */
  public $UseHeadOffice;

  /**
   * 
   * @var boolean $IsHeadOffice
   * @access public
   */
  public $IsHeadOffice;

  /**
   * 
   * @var float $CreditLimit
   * @access public
   */
  public $CreditLimit;

  /**
   * 
   * @var string $RegionID
   * @access public
   */
  public $RegionID;

  /**
   * 
   * @var string $PriorityID
   * @access public
   */
  public $PriorityID;

  /**
   * 
   * @var string $DeliveryRouteID
   * @access public
   */
  public $DeliveryRouteID;

  /**
   * 
   * @var string $PriceCategoryID
   * @access public
   */
  public $PriceCategoryID;

  /**
   * 
   * @var string $PriceListID
   * @access public
   */
  public $PriceListID;

  /**
   * 
   * @var string $DepartmentID
   * @access public
   */
  public $DepartmentID;

  /**
   * 
   * @var string $InternationalBankAccountNumber
   * @access public
   */
  public $InternationalBankAccountNumber;

  /**
   * 
   * @var string $BankSortCode
   * @access public
   */
  public $BankSortCode;

  /**
   * 
   * @var string $BankCode
   * @access public
   */
  public $BankCode;

  /**
   * 
   * @var string $BankSwiftCode
   * @access public
   */
  public $BankSwiftCode;

  /**
   * 
   * @var string $AccountReferralID
   * @access public
   */
  public $AccountReferralID;

  /**
   * 
   * @var string $MobilePhone
   * @access public
   */
  public $MobilePhone;

  /**
   * 
   * @var boolean $IsFranchise
   * @access public
   */
  public $IsFranchise;

  /**
   * 
   * @var string $ContractorTaxCode
   * @access public
   */
  public $ContractorTaxCode;

  /**
   * 
   * @var string $RowVersionNumber
   * @access public
   */
  public $RowVersionNumber;

  /**
   * 
   * @var string $EDICentralID
   * @access public
   */
  public $EDICentralID;

  /**
   * 
   * @param int $AccountID
   * @param LedgerType $LedgerType
   * @param string $Code
   * @param string $Name
   * @param string $GroupID
   * @param string $DefaultTaxCode
   * @param string $AreaID
   * @param string $BankAccountCode
   * @param string $CountryID
   * @param string $CreditTermID
   * @param string $CurrencyCode
   * @param string $PaymentMethodID
   * @param string $AuthorUserID
   * @param string $ShipViaID
   * @param dateTime $CreationDate
   * @param string $Address1
   * @param string $Address2
   * @param string $City
   * @param string $County_State
   * @param string $Country
   * @param string $PostCode
   * @param string $DeliveryName
   * @param string $DeliveryAddress1
   * @param string $DeliveryAddress2
   * @param string $DeliveryCity
   * @param string $DeliveryCounty_State
   * @param string $DeliveryCountry
   * @param string $DeliveryPostCode
   * @param string $DeliveryContact
   * @param string $DeliveryPhone
   * @param string $DeliveryFax
   * @param string $Phone
   * @param string $Fax
   * @param string $Email
   * @param string $WebAddress
   * @param string $Contact
   * @param string $VATRegistrationNumber
   * @param string $VATExemptReference
   * @param float $DiscountRate
   * @param boolean $UseAccountTaxCode
   * @param string $DefaultGLAccountCode
   * @param string $ControlGLAccountCode
   * @param boolean $IsActive
   * @param int $Hold
   * @param int $HeadOfficeAccountID
   * @param string $Notes
   * @param boolean $UseHeadOffice
   * @param boolean $IsHeadOffice
   * @param float $CreditLimit
   * @param string $RegionID
   * @param string $PriorityID
   * @param string $DeliveryRouteID
   * @param string $PriceCategoryID
   * @param string $PriceListID
   * @param string $DepartmentID
   * @param string $InternationalBankAccountNumber
   * @param string $BankSortCode
   * @param string $BankCode
   * @param string $BankSwiftCode
   * @param string $AccountReferralID
   * @param string $MobilePhone
   * @param boolean $IsFranchise
   * @param string $ContractorTaxCode
   * @param string $RowVersionNumber
   * @param string $EDICentralID
   * @access public
   */
  public function __construct($AccountID, $LedgerType, $Code, $Name, $GroupID, $DefaultTaxCode, $AreaID, $BankAccountCode, $CountryID, $CreditTermID, $CurrencyCode, $PaymentMethodID, $AuthorUserID, $ShipViaID, $CreationDate, $Address1, $Address2, $City, $County_State, $Country, $PostCode, $DeliveryName, $DeliveryAddress1, $DeliveryAddress2, $DeliveryCity, $DeliveryCounty_State, $DeliveryCountry, $DeliveryPostCode, $DeliveryContact, $DeliveryPhone, $DeliveryFax, $Phone, $Fax, $Email, $WebAddress, $Contact, $VATRegistrationNumber, $VATExemptReference, $DiscountRate, $UseAccountTaxCode, $DefaultGLAccountCode, $ControlGLAccountCode, $IsActive, $Hold, $HeadOfficeAccountID, $Notes, $UseHeadOffice, $IsHeadOffice, $CreditLimit, $RegionID, $PriorityID, $DeliveryRouteID, $PriceCategoryID, $PriceListID, $DepartmentID, $InternationalBankAccountNumber, $BankSortCode, $BankCode, $BankSwiftCode, $AccountReferralID, $MobilePhone, $IsFranchise, $ContractorTaxCode, $RowVersionNumber, $EDICentralID)
  {
    $this->AccountID = $AccountID;
    $this->LedgerType = $LedgerType;
    $this->Code = $Code;
    $this->Name = $Name;
    $this->GroupID = $GroupID;
    $this->DefaultTaxCode = $DefaultTaxCode;
    $this->AreaID = $AreaID;
    $this->BankAccountCode = $BankAccountCode;
    $this->CountryID = $CountryID;
    $this->CreditTermID = $CreditTermID;
    $this->CurrencyCode = $CurrencyCode;
    $this->PaymentMethodID = $PaymentMethodID;
    $this->AuthorUserID = $AuthorUserID;
    $this->ShipViaID = $ShipViaID;
    $this->CreationDate = $CreationDate;
    $this->Address1 = $Address1;
    $this->Address2 = $Address2;
    $this->City = $City;
    $this->County_State = $County_State;
    $this->Country = $Country;
    $this->PostCode = $PostCode;
    $this->DeliveryName = $DeliveryName;
    $this->DeliveryAddress1 = $DeliveryAddress1;
    $this->DeliveryAddress2 = $DeliveryAddress2;
    $this->DeliveryCity = $DeliveryCity;
    $this->DeliveryCounty_State = $DeliveryCounty_State;
    $this->DeliveryCountry = $DeliveryCountry;
    $this->DeliveryPostCode = $DeliveryPostCode;
    $this->DeliveryContact = $DeliveryContact;
    $this->DeliveryPhone = $DeliveryPhone;
    $this->DeliveryFax = $DeliveryFax;
    $this->Phone = $Phone;
    $this->Fax = $Fax;
    $this->Email = $Email;
    $this->WebAddress = $WebAddress;
    $this->Contact = $Contact;
    $this->VATRegistrationNumber = $VATRegistrationNumber;
    $this->VATExemptReference = $VATExemptReference;
    $this->DiscountRate = $DiscountRate;
    $this->UseAccountTaxCode = $UseAccountTaxCode;
    $this->DefaultGLAccountCode = $DefaultGLAccountCode;
    $this->ControlGLAccountCode = $ControlGLAccountCode;
    $this->IsActive = $IsActive;
    $this->Hold = $Hold;
    $this->HeadOfficeAccountID = $HeadOfficeAccountID;
    $this->Notes = $Notes;
    $this->UseHeadOffice = $UseHeadOffice;
    $this->IsHeadOffice = $IsHeadOffice;
    $this->CreditLimit = $CreditLimit;
    $this->RegionID = $RegionID;
    $this->PriorityID = $PriorityID;
    $this->DeliveryRouteID = $DeliveryRouteID;
    $this->PriceCategoryID = $PriceCategoryID;
    $this->PriceListID = $PriceListID;
    $this->DepartmentID = $DepartmentID;
    $this->InternationalBankAccountNumber = $InternationalBankAccountNumber;
    $this->BankSortCode = $BankSortCode;
    $this->BankCode = $BankCode;
    $this->BankSwiftCode = $BankSwiftCode;
    $this->AccountReferralID = $AccountReferralID;
    $this->MobilePhone = $MobilePhone;
    $this->IsFranchise = $IsFranchise;
    $this->ContractorTaxCode = $ContractorTaxCode;
    $this->RowVersionNumber = $RowVersionNumber;
    $this->EDICentralID = $EDICentralID;
  }

}
