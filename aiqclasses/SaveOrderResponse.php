<?php

class SaveOrderResponse
{

  /**
   * 
   * @var WSResultStatus $SaveOrderResult
   * @access public
   */
  public $SaveOrderResult;

  /**
   * 
   * @param WSResultStatus $SaveOrderResult
   * @access public
   */
  public function __construct($SaveOrderResult)
  {
    $this->SaveOrderResult = $SaveOrderResult;
  }

}
