<?php

class GetGLAccountListResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfArrayOfString $GetGLAccountListResult
   * @access public
   */
  public $GetGLAccountListResult;

  /**
   * 
   * @param WSResult2OfArrayOfArrayOfString $GetGLAccountListResult
   * @access public
   */
  public function __construct($GetGLAccountListResult)
  {
    $this->GetGLAccountListResult = $GetGLAccountListResult;
  }

}
