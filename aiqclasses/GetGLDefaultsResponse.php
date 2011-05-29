<?php

class GetGLDefaultsResponse
{

  /**
   * 
   * @var WSResult2OfGLDefaults $GetGLDefaultsResult
   * @access public
   */
  public $GetGLDefaultsResult;

  /**
   * 
   * @param WSResult2OfGLDefaults $GetGLDefaultsResult
   * @access public
   */
  public function __construct($GetGLDefaultsResult)
  {
    $this->GetGLDefaultsResult = $GetGLDefaultsResult;
  }

}
