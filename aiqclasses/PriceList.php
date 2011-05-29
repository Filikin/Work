<?php

class PriceList
{

  /**
   * 
   * @var string $PriceListID
   * @access public
   */
  public $PriceListID;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description;

  /**
   * 
   * @var dateTime $CreationDate
   * @access public
   */
  public $CreationDate;

  /**
   * 
   * @var string $AuthorUserID
   * @access public
   */
  public $AuthorUserID;

  /**
   * 
   * @var array $Items
   * @access public
   */
  public $Items;

  /**
   * 
   * @var boolean $IsDefault
   * @access public
   */
  public $IsDefault;

  /**
   * 
   * @param string $PriceListID
   * @param string $Description
   * @param dateTime $CreationDate
   * @param string $AuthorUserID
   * @param array $Items
   * @param boolean $IsDefault
   * @access public
   */
  public function __construct($PriceListID, $Description, $CreationDate, $AuthorUserID, $Items, $IsDefault)
  {
    $this->PriceListID = $PriceListID;
    $this->Description = $Description;
    $this->CreationDate = $CreationDate;
    $this->AuthorUserID = $AuthorUserID;
    $this->Items = $Items;
    $this->IsDefault = $IsDefault;
  }

}
