<?php

class GetAccountBalanceInformation
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var dateTime $edt
   * @access public
   */
  public $edt;

  /**
   * 
   * @var array $accountIDs
   * @access public
   */
  public $accountIDs;

  /**
   * 
   * @param string $token
   * @param dateTime $edt
   * @param array $accountIDs
   * @access public
   */
  public function __construct($token, $edt, $accountIDs)
  {
    $this->token = $token;
    $this->edt = $edt;
    $this->accountIDs = $accountIDs;
  }

}
