<?php

class Department
{

  /**
   * 
   * @var string $DepartmentID
   * @access public
   */
  public $DepartmentID;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description;

  /**
   * 
   * @var string $AnalysisCode1
   * @access public
   */
  public $AnalysisCode1;

  /**
   * 
   * @var string $AnalysisCode2
   * @access public
   */
  public $AnalysisCode2;

  /**
   * 
   * @var string $AnalysisCode3
   * @access public
   */
  public $AnalysisCode3;

  /**
   * 
   * @var string $AnalysisCode4
   * @access public
   */
  public $AnalysisCode4;

  /**
   * 
   * @var string $AnalysisCode5
   * @access public
   */
  public $AnalysisCode5;

  /**
   * 
   * @var string $AnalysisCode6
   * @access public
   */
  public $AnalysisCode6;

  /**
   * 
   * @var boolean $IsActive
   * @access public
   */
  public $IsActive;

  /**
   * 
   * @param string $DepartmentID
   * @param string $Description
   * @param string $AnalysisCode1
   * @param string $AnalysisCode2
   * @param string $AnalysisCode3
   * @param string $AnalysisCode4
   * @param string $AnalysisCode5
   * @param string $AnalysisCode6
   * @param boolean $IsActive
   * @access public
   */
  public function __construct($DepartmentID, $Description, $AnalysisCode1, $AnalysisCode2, $AnalysisCode3, $AnalysisCode4, $AnalysisCode5, $AnalysisCode6, $IsActive)
  {
    $this->DepartmentID = $DepartmentID;
    $this->Description = $Description;
    $this->AnalysisCode1 = $AnalysisCode1;
    $this->AnalysisCode2 = $AnalysisCode2;
    $this->AnalysisCode3 = $AnalysisCode3;
    $this->AnalysisCode4 = $AnalysisCode4;
    $this->AnalysisCode5 = $AnalysisCode5;
    $this->AnalysisCode6 = $AnalysisCode6;
    $this->IsActive = $IsActive;
  }

}
