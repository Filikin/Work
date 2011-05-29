<?php

class Bank
{

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
   * @var string $County
   * @access public
   */
  public $County;

  /**
   * 
   * @var string $CountryState
   * @access public
   */
  public $CountryState;

  /**
   * 
   * @var int $BankID
   * @access public
   */
  public $BankID;

  /**
   * 
   * @var string $Code
   * @access public
   */
  public $Code;

  /**
   * 
   * @var string $BankAccountCode
   * @access public
   */
  public $BankAccountCode;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name;

  /**
   * 
   * @var string $CurrencyCode
   * @access public
   */
  public $CurrencyCode;

  /**
   * 
   * @var float $OverdraftLimit
   * @access public
   */
  public $OverdraftLimit;

  /**
   * 
   * @var string $InternationalBankAccountNumber
   * @access public
   */
  public $InternationalBankAccountNumber;

  /**
   * 
   * @var string $SortCode
   * @access public
   */
  public $SortCode;

  /**
   * 
   * @var string $SwiftCode
   * @access public
   */
  public $SwiftCode;

  /**
   * 
   * @var string $OnlineUserID
   * @access public
   */
  public $OnlineUserID;

  /**
   * 
   * @var OnlineBankTypes $OnlineBankType
   * @access public
   */
  public $OnlineBankType;

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
   * @var string $RowVersionNumber
   * @access public
   */
  public $RowVersionNumber;

  /**
   * 
   * @param string $Address1
   * @param string $Address2
   * @param string $City
   * @param string $County
   * @param string $CountryState
   * @param int $BankID
   * @param string $Code
   * @param string $BankAccountCode
   * @param string $Name
   * @param string $CurrencyCode
   * @param float $OverdraftLimit
   * @param string $InternationalBankAccountNumber
   * @param string $SortCode
   * @param string $SwiftCode
   * @param string $OnlineUserID
   * @param OnlineBankTypes $OnlineBankType
   * @param string $Phone
   * @param string $Fax
   * @param string $RowVersionNumber
   * @access public
   */
  public function __construct($Address1, $Address2, $City, $County, $CountryState, $BankID, $Code, $BankAccountCode, $Name, $CurrencyCode, $OverdraftLimit, $InternationalBankAccountNumber, $SortCode, $SwiftCode, $OnlineUserID, $OnlineBankType, $Phone, $Fax, $RowVersionNumber)
  {
    $this->Address1 = $Address1;
    $this->Address2 = $Address2;
    $this->City = $City;
    $this->County = $County;
    $this->CountryState = $CountryState;
    $this->BankID = $BankID;
    $this->Code = $Code;
    $this->BankAccountCode = $BankAccountCode;
    $this->Name = $Name;
    $this->CurrencyCode = $CurrencyCode;
    $this->OverdraftLimit = $OverdraftLimit;
    $this->InternationalBankAccountNumber = $InternationalBankAccountNumber;
    $this->SortCode = $SortCode;
    $this->SwiftCode = $SwiftCode;
    $this->OnlineUserID = $OnlineUserID;
    $this->OnlineBankType = $OnlineBankType;
    $this->Phone = $Phone;
    $this->Fax = $Fax;
    $this->RowVersionNumber = $RowVersionNumber;
  }

}
