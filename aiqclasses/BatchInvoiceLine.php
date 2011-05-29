<?php

class BatchInvoiceLine
{

  /**
   * 
   * @var string $GLAccountCode
   * @access public
   */
  public $GLAccountCode;

  /**
   * 
   * @var string $TaxCode
   * @access public
   */
  public $TaxCode;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description;

  /**
   * 
   * @var string $DepartmentID
   * @access public
   */
  public $DepartmentID;

  /**
   * 
   * @var float $NetAmount
   * @access public
   */
  public $NetAmount;

  /**
   * 
   * @var float $TaxRate
   * @access public
   */
  public $TaxRate;

  /**
   * 
   * @param string $GLAccountCode
   * @param string $TaxCode
   * @param string $Description
   * @param string $DepartmentID
   * @param float $NetAmount
   * @param float $TaxRate
   * @access public
   */
  public function __construct($GLAccountCode, $TaxCode, $Description, $DepartmentID, $NetAmount, $TaxRate)
  {
    $this->GLAccountCode = $GLAccountCode;
    $this->TaxCode = $TaxCode;
    $this->Description = $Description;
    $this->DepartmentID = $DepartmentID;
    $this->NetAmount = $NetAmount;
    $this->TaxRate = $TaxRate;
  }

}
