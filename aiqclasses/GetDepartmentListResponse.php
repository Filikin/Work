<?php

class GetDepartmentListResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfDepartment $GetDepartmentListResult
   * @access public
   */
  public $GetDepartmentListResult;

  /**
   * 
   * @param WSResult2OfArrayOfDepartment $GetDepartmentListResult
   * @access public
   */
  public function __construct($GetDepartmentListResult)
  {
    $this->GetDepartmentListResult = $GetDepartmentListResult;
  }

}
