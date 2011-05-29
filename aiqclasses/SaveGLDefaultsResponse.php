<?php

class SaveGLDefaultsResponse
{

  /**
   * 
   * @var WSResultStatus $SaveGLDefaultsResult
   * @access public
   */
  public $SaveGLDefaultsResult;

  /**
   * 
   * @param WSResultStatus $SaveGLDefaultsResult
   * @access public
   */
  public function __construct($SaveGLDefaultsResult)
  {
    $this->SaveGLDefaultsResult = $SaveGLDefaultsResult;
  }

}
