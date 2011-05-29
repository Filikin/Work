<?php

class CustomerState
{

  /**
   * 
   * @var float $From0To30DaysBalanceBucket
   * @access public
   */
  public $From0To30DaysBalanceBucket;

  /**
   * 
   * @var float $From30To60DaysBalanceBucket
   * @access public
   */
  public $From30To60DaysBalanceBucket;

  /**
   * 
   * @var float $From60To90DaysBalanceBucket
   * @access public
   */
  public $From60To90DaysBalanceBucket;

  /**
   * 
   * @var float $From90To120DaysBalanceBucket
   * @access public
   */
  public $From90To120DaysBalanceBucket;

  /**
   * 
   * @var float $From120DaysPlusBalanceBucket
   * @access public
   */
  public $From120DaysPlusBalanceBucket;

  /**
   * 
   * @var float $FutureBalanceBucket
   * @access public
   */
  public $FutureBalanceBucket;

  /**
   * 
   * @var float $CurrentBalance
   * @access public
   */
  public $CurrentBalance;

  /**
   * 
   * @var dateTime $CurrentDate
   * @access public
   */
  public $CurrentDate;

  /**
   * 
   * @var string $CustomerCode
   * @access public
   */
  public $CustomerCode;

  /**
   * 
   * @param float $From0To30DaysBalanceBucket
   * @param float $From30To60DaysBalanceBucket
   * @param float $From60To90DaysBalanceBucket
   * @param float $From90To120DaysBalanceBucket
   * @param float $From120DaysPlusBalanceBucket
   * @param float $FutureBalanceBucket
   * @param float $CurrentBalance
   * @param dateTime $CurrentDate
   * @param string $CustomerCode
   * @access public
   */
  public function __construct($From0To30DaysBalanceBucket, $From30To60DaysBalanceBucket, $From60To90DaysBalanceBucket, $From90To120DaysBalanceBucket, $From120DaysPlusBalanceBucket, $FutureBalanceBucket, $CurrentBalance, $CurrentDate, $CustomerCode)
  {
    $this->From0To30DaysBalanceBucket = $From0To30DaysBalanceBucket;
    $this->From30To60DaysBalanceBucket = $From30To60DaysBalanceBucket;
    $this->From60To90DaysBalanceBucket = $From60To90DaysBalanceBucket;
    $this->From90To120DaysBalanceBucket = $From90To120DaysBalanceBucket;
    $this->From120DaysPlusBalanceBucket = $From120DaysPlusBalanceBucket;
    $this->FutureBalanceBucket = $FutureBalanceBucket;
    $this->CurrentBalance = $CurrentBalance;
    $this->CurrentDate = $CurrentDate;
    $this->CustomerCode = $CustomerCode;
  }

}
