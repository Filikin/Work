<?php

class CreditTerm
{

  /**
   * 
   * @var int $CreditDays
   * @access public
   */
  public $CreditDays;

  /**
   * 
   * @var boolean $EndOfMonth
   * @access public
   */
  public $EndOfMonth;

  /**
   * 
   * @var CreditTermChecker $Checker
   * @access public
   */
  public $Checker;

  /**
   * 
   * @param int $CreditDays
   * @param boolean $EndOfMonth
   * @param CreditTermChecker $Checker
   * @access public
   */
  public function __construct($CreditDays, $EndOfMonth, $Checker)
  {
    $this->CreditDays = $CreditDays;
    $this->EndOfMonth = $EndOfMonth;
    $this->Checker = $Checker;
  }

}
