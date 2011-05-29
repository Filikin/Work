<?php

class WSResultStatus
{

  /**
   * 
   * @var boolean $HasExpired
   * @access public
   */
  public $HasExpired;

  /**
   * 
   * @var string $ErrorMessage
   * @access public
   */
  public $ErrorMessage;

  /**
   * 
   * @param boolean $HasExpired
   * @param string $ErrorMessage
   * @access public
   */
  public function __construct($HasExpired, $ErrorMessage)
  {
    $this->HasExpired = $HasExpired;
    $this->ErrorMessage = $ErrorMessage;
  }

}
