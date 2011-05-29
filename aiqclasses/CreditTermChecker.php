<?php

class CreditTermChecker
{

  /**
   * 
   * @var int $CreditDayLength
   * @access public
   */
  public $CreditDayLength;

  /**
   * 
   * @param int $CreditDayLength
   * @access public
   */
  public function __construct($CreditDayLength)
  {
    $this->CreditDayLength = $CreditDayLength;
  }

}
