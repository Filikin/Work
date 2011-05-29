<?php

class BatchSalesInvoice
{

  /**
   * 
   * @var string $CustomerCode
   * @access public
   */
  public $CustomerCode;

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
   * @param string $CustomerCode
   * @param dateTime $InvoiceDate
   * @param string $ExternalReference
   * @param string $Description
   * @param array $Lines
   * @param float $ExchangeRate
   * @access public
   */
  public function __construct($CustomerCode, $InvoiceDate, $ExternalReference, $Description, $Lines, $ExchangeRate)
  {
    $this->CustomerCode = $CustomerCode;
    $this->InvoiceDate = $InvoiceDate;
    $this->ExternalReference = $ExternalReference;
    $this->Description = $Description;
    $this->Lines = $Lines;
    $this->ExchangeRate = $ExchangeRate;
  }

}
