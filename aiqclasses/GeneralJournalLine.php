<?php

class GeneralJournalLine
{

  /**
   * 
   * @var string $GLAccountCode
   * @access public
   */
  public $GLAccountCode;

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
   * @var float $Debit
   * @access public
   */
  public $Debit;

  /**
   * 
   * @var float $Credit
   * @access public
   */
  public $Credit;

  /**
   * 
   * @var float $Amount
   * @access public
   */
  public $Amount;

  /**
   * 
   * @param string $GLAccountCode
   * @param string $Description
   * @param string $DepartmentID
   * @param float $Debit
   * @param float $Credit
   * @param float $Amount
   * @access public
   */
  public function __construct($GLAccountCode, $Description, $DepartmentID, $Debit, $Credit, $Amount)
  {
    $this->GLAccountCode = $GLAccountCode;
    $this->Description = $Description;
    $this->DepartmentID = $DepartmentID;
    $this->Debit = $Debit;
    $this->Credit = $Credit;
    $this->Amount = $Amount;
  }

}
