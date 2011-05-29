<?php

class Login
{

  /**
   * 
   * @var string $companyID
   * @access public
   */
  public $companyID;

  /**
   * 
   * @var string $partnerKey
   * @access public
   */
  public $partnerKey;

  /**
   * 
   * @var string $userKey
   * @access public
   */
  public $userKey;

  /**
   * 
   * @param string $companyID
   * @param string $partnerKey
   * @param string $userKey
   * @access public
   */
  public function __construct($companyID, $partnerKey, $userKey)
  {
    $this->companyID = $companyID;
    $this->partnerKey = $partnerKey;
    $this->userKey = $userKey;
  }

}
