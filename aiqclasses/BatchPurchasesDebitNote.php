<?php

class BatchPurchasesDebitNote
{

  /**
   * 
   * @var string $SupplierCode
   * @access public
   */
  public $SupplierCode;

  /**
   * 
   * @var dateTime $DebitNoteDate
   * @access public
   */
  public $DebitNoteDate;

  /**
   * 
   * @var string $ExternalReference
   * @access public
   */
  public $ExternalReference;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description;

  /**
   * 
   * @var array $Lines
   * @access public
   */
  public $Lines;

  /**
   * 
   * @var float $ExchangeRate
   * @access public
   */
  public $ExchangeRate;

  /**
   * 
   * @param string $SupplierCode
   * @param dateTime $DebitNoteDate
   * @param string $ExternalReference
   * @param string $Description
   * @param array $Lines
   * @param float $ExchangeRate
   * @access public
   */
  public function __construct($SupplierCode, $DebitNoteDate, $ExternalReference, $Description, $Lines, $ExchangeRate)
  {
    $this->SupplierCode = $SupplierCode;
    $this->DebitNoteDate = $DebitNoteDate;
    $this->ExternalReference = $ExternalReference;
    $this->Description = $Description;
    $this->Lines = $Lines;
    $this->ExchangeRate = $ExchangeRate;
  }

}
