<?php

class BatchSalesCreditNote
{

  /**
   * 
   * @var string $CustomerCode
   * @access public
   */
  public $CustomerCode;

  /**
   * 
   * @var dateTime $CreditNoteDate
   * @access public
   */
  public $CreditNoteDate;

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
   * @param dateTime $CreditNoteDate
   * @param string $ExternalReference
   * @param string $Description
   * @param array $Lines
   * @param float $ExchangeRate
   * @access public
   */
  public function __construct($CustomerCode, $CreditNoteDate, $ExternalReference, $Description, $Lines, $ExchangeRate)
  {
    $this->CustomerCode = $CustomerCode;
    $this->CreditNoteDate = $CreditNoteDate;
    $this->ExternalReference = $ExternalReference;
    $this->Description = $Description;
    $this->Lines = $Lines;
    $this->ExchangeRate = $ExchangeRate;
  }

}
