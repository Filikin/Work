<?php

class GetOrdersByExternalReference
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var string $externalReference
   * @access public
   */
  public $externalReference;

  /**
   * 
   * @param string $token
   * @param string $externalReference
   * @access public
   */
  public function __construct($token, $externalReference)
  {
    $this->token = $token;
    $this->externalReference = $externalReference;
  }

}
