<?php

class BankDefaults
{

  /**
   * 
   * @var string $AuthorUserID
   * @access public
   */
  public $AuthorUserID;

  /**
   * 
   * @var string $CurrencyCode
   * @access public
   */
  public $CurrencyCode;

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
   * @param string $AuthorUserID
   * @param string $CurrencyCode
   * @param string $GLCategoryID
   * @param string $GLSubCategoryID
   * @param string $TaxID
   * @access public
   */
  public function __construct($AuthorUserID, $CurrencyCode, $GLCategoryID, $GLSubCategoryID, $TaxID)
  {
    $this->AuthorUserID = $AuthorUserID;
    $this->CurrencyCode = $CurrencyCode;
    $this->GLCategoryID = $GLCategoryID;
    $this->GLSubCategoryID = $GLSubCategoryID;
    $this->TaxID = $TaxID;
  }

}
