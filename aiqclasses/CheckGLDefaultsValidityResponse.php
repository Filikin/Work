<?php

class CheckGLDefaultsValidityResponse
{

  /**
   * 
   * @var WSResult2OfBoolean $CheckGLDefaultsValidityResult
   * @access public
   */
  public $CheckGLDefaultsValidityResult;

  /**
   * 
   * @param WSResult2OfBoolean $CheckGLDefaultsValidityResult
   * @access public
   */
  public function __construct($CheckGLDefaultsValidityResult)
  {
    $this->CheckGLDefaultsValidityResult = $CheckGLDefaultsValidityResult;
  }

}
