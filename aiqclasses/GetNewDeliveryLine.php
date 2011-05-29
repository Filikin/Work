<?php

class GetNewDeliveryLine
{

  /**
   * 
   * @var string $token
   * @access public
   */
  public $token;

  /**
   * 
   * @var OrderLine $line
   * @access public
   */
  public $line;

  /**
   * 
   * @param string $token
   * @param OrderLine $line
   * @access public
   */
  public function __construct($token, $line)
  {
    $this->token = $token;
    $this->line = $line;
  }

}
