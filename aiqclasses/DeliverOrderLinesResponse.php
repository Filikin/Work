<?php

class DeliverOrderLinesResponse
{

  /**
   * 
   * @var WSResultStatus $DeliverOrderLinesResult
   * @access public
   */
  public $DeliverOrderLinesResult;

  /**
   * 
   * @param WSResultStatus $DeliverOrderLinesResult
   * @access public
   */
  public function __construct($DeliverOrderLinesResult)
  {
    $this->DeliverOrderLinesResult = $DeliverOrderLinesResult;
  }

}
