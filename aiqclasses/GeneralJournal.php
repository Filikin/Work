<?php

class GeneralJournal
{

  /**
   * 
   * @var string $InternalReference
   * @access public
   */
  public $InternalReference;

  /**
   * 
   * @var string $ExternalReference
   * @access public
   */
  public $ExternalReference;

  /**
   * 
   * @var dateTime $TransactionDate
   * @access public
   */
  public $TransactionDate;

  /**
   * 
   * @var array $Lines
   * @access public
   */
  public $Lines;

  /**
   * 
   * @param string $InternalReference
   * @param string $ExternalReference
   * @param dateTime $TransactionDate
   * @param array $Lines
   * @access public
   */
  public function __construct($InternalReference, $ExternalReference, $TransactionDate, $Lines)
  {
    $this->InternalReference = $InternalReference;
    $this->ExternalReference = $ExternalReference;
    $this->TransactionDate = $TransactionDate;
    $this->Lines = $Lines;
  }

}
