<?php

class AllocateTransactionsWithDiscount
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var int $transactionID_1
   * @access public
   */
  public $transactionID_1;

  /**
   * 
   * @var int $transactionID_2
   * @access public
   */
  public $transactionID_2;

  /**
   * 
   * @var string $allocationReference
   * @access public
   */
  public $allocationReference;

  /**
   * 
   * @var float $allocationAmount
   * @access public
   */
  public $allocationAmount;

  /**
   * 
   * @var dateTime $allocationDate
   * @access public
   */
  public $allocationDate;

  /**
   * 
   * @var float $discountAmount
   * @access public
   */
  public $discountAmount;

  /**
   * 
   * @param string $token
   * @param int $transactionID_1
   * @param int $transactionID_2
   * @param string $allocationReference
   * @param float $allocationAmount
   * @param dateTime $allocationDate
   * @param float $discountAmount
   * @access public
   */
  public function __construct($token, $transactionID_1, $transactionID_2, $allocationReference, $allocationAmount, $allocationDate, $discountAmount)
  {
    $this->token = $token;
    $this->transactionID_1 = $transactionID_1;
    $this->transactionID_2 = $transactionID_2;
    $this->allocationReference = $allocationReference;
    $this->allocationAmount = $allocationAmount;
    $this->allocationDate = $allocationDate;
    $this->discountAmount = $discountAmount;
  }

}
