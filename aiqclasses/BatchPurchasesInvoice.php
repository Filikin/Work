<?php

class BatchPurchasesInvoice
{

  /**
   * 
   * @var string $SupplierCode
   * @access public
   */
  public $SupplierCode;

  /**
   * 
   * @var dateTime $InvoiceDate
   * @access public
   */
  public $InvoiceDate;

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
   * @param dateTime $InvoiceDate
   * @param string $ExternalReference
   * @param string $Description
   * @param array $Lines
   * @param float $ExchangeRate
   * @access public
   */
  public function __construct($SupplierCode, $InvoiceDate, $ExternalReference, $Description, $Lines, $ExchangeRate)
  {
    $this->SupplierCode = $SupplierCode;
    $this->InvoiceDate = $InvoiceDate;
    $this->ExternalReference = $ExternalReference;
    $this->Description = $Description;
    $this->Lines = $Lines;
    $this->ExchangeRate = $ExchangeRate;
  }

}
