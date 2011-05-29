<?php

class InfoBase
{

  /**
   * 
   * @var string $ID
   * @access public
   */
  public $ID;

  /**
   * 
   * @var string $Code
   * @access public
   */
  public $Code;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description;

  /**
   * 
   * @var string $RowVersionNumber
   * @access public
   */
  public $RowVersionNumber;

  /**
   * 
   * @param string $ID
   * @param string $Code
   * @param string $Description
   * @param string $RowVersionNumber
   * @access public
   */
  public function __construct($ID, $Code, $Description, $RowVersionNumber)
  {
    $this->ID = $ID;
    $this->Code = $Code;
    $this->Description = $Description;
    $this->RowVersionNumber = $RowVersionNumber;
  }

}
