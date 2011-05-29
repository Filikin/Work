<?php

class OperationResult
{

  /**
   * 
   * @var OperationStatus $Status
   * @access public
   */
  public $Status;

  /**
   * 
   * @var VisorExceptionCodes $ErrorCode
   * @access public
   */
  public $ErrorCode;

  /**
   * 
   * @param OperationStatus $Status
   * @param VisorExceptionCodes $ErrorCode
   * @access public
   */
  public function __construct($Status, $ErrorCode)
  {
    $this->Status = $Status;
    $this->ErrorCode = $ErrorCode;
  }

}
