<?php

class TransactionState
{

  /**
   * 
   * @var int $TransactionReference
   * @access public
   */
  public $TransactionReference;

  /**
   * 
   * @var string $Type
   * @access public
   */
  public $Type;

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
   * @var float $Amount
   * @access public
   */
  public $Amount;

  /**
   * 
   * @var float $OutstandingAmount
   * @access public
   */
  public $OutstandingAmount;

  /**
   * 
   * @var dateTime $TransactionDate
   * @access public
   */
  public $TransactionDate;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description;

  /**
   * 
   * @param int $TransactionReference
   * @param string $Type
   * @param string $InternalNumber
   * @param string $ExternalReference
   * @param float $Amount
   * @param float $OutstandingAmount
   * @param dateTime $TransactionDate
   * @param string $Description
   * @access public
   */
  public function __construct($TransactionReference, $Type, $InternalNumber, $ExternalReference, $Amount, $OutstandingAmount, $TransactionDate, $Description)
  {
    $this->TransactionReference = $TransactionReference;
    $this->Type = $Type;
    $this->InternalNumber = $InternalNumber;
    $this->ExternalReference = $ExternalReference;
    $this->Amount = $Amount;
    $this->OutstandingAmount = $OutstandingAmount;
    $this->TransactionDate = $TransactionDate;
    $this->Description = $Description;
  }

}
