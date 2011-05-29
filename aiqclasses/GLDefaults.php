<?php

class GLDefaults
{

  /**
   * 
   * @var string $GLCategoryID
   * @access public
   */
  public $GLCategoryID;

  /**
   * 
   * @var string $GLSubCategoryID
   * @access public
   */
  public $GLSubCategoryID;

  /**
   * 
   * @var string $TaxID
   * @access public
   */
  public $TaxID;

  /**
   * 
   * @var string $GLGroupID
   * @access public
   */
  public $GLGroupID;

  /**
   * 
   * @var string $DepartmentID
   * @access public
   */
  public $DepartmentID;

  /**
   * 
   * @var string $AuthorUserID
   * @access public
   */
  public $AuthorUserID;

  /**
   * 
   * @param string $GLCategoryID
   * @param string $GLSubCategoryID
   * @param string $TaxID
   * @param string $GLGroupID
   * @param string $DepartmentID
   * @param string $AuthorUserID
   * @access public
   */
  public function __construct($GLCategoryID, $GLSubCategoryID, $TaxID, $GLGroupID, $DepartmentID, $AuthorUserID)
  {
    $this->GLCategoryID = $GLCategoryID;
    $this->GLSubCategoryID = $GLSubCategoryID;
    $this->TaxID = $TaxID;
    $this->GLGroupID = $GLGroupID;
    $this->DepartmentID = $DepartmentID;
    $this->AuthorUserID = $AuthorUserID;
  }

}
