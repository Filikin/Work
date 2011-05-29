<?php

class PriceListItem
{

  /**
   * 
   * @var int $PriceListItemID
   * @access public
   */
  public $PriceListItemID;

  /**
   * 
   * @var int $AccountID
   * @access public
   */
  public $AccountID;

  /**
   * 
   * @var float $QuantityFrom
   * @access public
   */
  public $QuantityFrom;

  /**
   * 
   * @var string $PriceListID
   * @access public
   */
  public $PriceListID;

  /**
   * 
   * @var float $DiscountRate
   * @access public
   */
  public $DiscountRate;

  /**
   * 
   * @var dateTime $CreationDate
   * @access public
   */
  public $CreationDate;

  /**
   * 
   * @var dateTime $DateRangeStart
   * @access public
   */
  public $DateRangeStart;

  /**
   * 
   * @var dateTime $DateRangeEnd
   * @access public
   */
  public $DateRangeEnd;

  /**
   * 
   * @var string $AuthorUserID
   * @access public
   */
  public $AuthorUserID;

  /**
   * 
   * @var float $ItemPrice
   * @access public
   */
  public $ItemPrice;

  /**
   * 
   * @var dateTime $LastModifiedDate
   * @access public
   */
  public $LastModifiedDate;

  /**
   * 
   * @var boolean $IsActive
   * @access public
   */
  public $IsActive;

  /**
   * 
   * @var string $StockItemID
   * @access public
   */
  public $StockItemID;

  /**
   * 
   * @param int $PriceListItemID
   * @param int $AccountID
   * @param float $QuantityFrom
   * @param string $PriceListID
   * @param float $DiscountRate
   * @param dateTime $CreationDate
   * @param dateTime $DateRangeStart
   * @param dateTime $DateRangeEnd
   * @param string $AuthorUserID
   * @param float $ItemPrice
   * @param dateTime $LastModifiedDate
   * @param boolean $IsActive
   * @param string $StockItemID
   * @access public
   */
  public function __construct($PriceListItemID, $AccountID, $QuantityFrom, $PriceListID, $DiscountRate, $CreationDate, $DateRangeStart, $DateRangeEnd, $AuthorUserID, $ItemPrice, $LastModifiedDate, $IsActive, $StockItemID)
  {
    $this->PriceListItemID = $PriceListItemID;
    $this->AccountID = $AccountID;
    $this->QuantityFrom = $QuantityFrom;
    $this->PriceListID = $PriceListID;
    $this->DiscountRate = $DiscountRate;
    $this->CreationDate = $CreationDate;
    $this->DateRangeStart = $DateRangeStart;
    $this->DateRangeEnd = $DateRangeEnd;
    $this->AuthorUserID = $AuthorUserID;
    $this->ItemPrice = $ItemPrice;
    $this->LastModifiedDate = $LastModifiedDate;
    $this->IsActive = $IsActive;
    $this->StockItemID = $StockItemID;
  }

}
