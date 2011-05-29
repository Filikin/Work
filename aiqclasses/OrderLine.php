<?php

class OrderLine
{

  /**
   * 
   * @var int $OrderItemID
   * @access public
   */
  public $OrderItemID;

  /**
   * 
   * @var int $OrderID
   * @access public
   */
  public $OrderID;

  /**
   * 
   * @var int $QuoteItemID
   * @access public
   */
  public $QuoteItemID;

  /**
   * 
   * @var string $StockItemID
   * @access public
   */
  public $StockItemID;

  /**
   * 
   * @var string $StockItemDescription
   * @access public
   */
  public $StockItemDescription;

  /**
   * 
   * @var float $OrderedQuantity
   * @access public
   */
  public $OrderedQuantity;

  /**
   * 
   * @var float $DeliveredQuantity
   * @access public
   */
  public $DeliveredQuantity;

  /**
   * 
   * @var float $InvoicedQuantity
   * @access public
   */
  public $InvoicedQuantity;

  /**
   * 
   * @var float $StockItemCost
   * @access public
   */
  public $StockItemCost;

  /**
   * 
   * @var float $StockItemPrice
   * @access public
   */
  public $StockItemPrice;

  /**
   * 
   * @var float $DiscountRate
   * @access public
   */
  public $DiscountRate;

  /**
   * 
   * @var float $ActualPrice
   * @access public
   */
  public $ActualPrice;

  /**
   * 
   * @var string $TaxCode
   * @access public
   */
  public $TaxCode;

  /**
   * 
   * @var float $TaxRate
   * @access public
   */
  public $TaxRate;

  /**
   * 
   * @var float $NetAmount
   * @access public
   */
  public $NetAmount;

  /**
   * 
   * @var float $TaxAmount
   * @access public
   */
  public $TaxAmount;

  /**
   * 
   * @var float $GrossAmount
   * @access public
   */
  public $GrossAmount;

  /**
   * 
   * @var string $LocationID
   * @access public
   */
  public $LocationID;

  /**
   * 
   * @var string $SublocationID
   * @access public
   */
  public $SublocationID;

  /**
   * 
   * @var dateTime $CreationDate
   * @access public
   */
  public $CreationDate;

  /**
   * 
   * @var string $Notes
   * @access public
   */
  public $Notes;

  /**
   * 
   * @var string $Notes2
   * @access public
   */
  public $Notes2;

  /**
   * 
   * @var string $GLAccountCode
   * @access public
   */
  public $GLAccountCode;

  /**
   * 
   * @var string $OpeningStockGLAccountCode
   * @access public
   */
  public $OpeningStockGLAccountCode;

  /**
   * 
   * @var string $DepartmentID
   * @access public
   */
  public $DepartmentID;

  /**
   * 
   * @var string $RowVersionNumber
   * @access public
   */
  public $RowVersionNumber;

  /**
   * 
   * @param int $OrderItemID
   * @param int $OrderID
   * @param int $QuoteItemID
   * @param string $StockItemID
   * @param string $StockItemDescription
   * @param float $OrderedQuantity
   * @param float $DeliveredQuantity
   * @param float $InvoicedQuantity
   * @param float $StockItemCost
   * @param float $StockItemPrice
   * @param float $DiscountRate
   * @param float $ActualPrice
   * @param string $TaxCode
   * @param float $TaxRate
   * @param float $NetAmount
   * @param float $TaxAmount
   * @param float $GrossAmount
   * @param string $LocationID
   * @param string $SublocationID
   * @param dateTime $CreationDate
   * @param string $Notes
   * @param string $Notes2
   * @param string $GLAccountCode
   * @param string $OpeningStockGLAccountCode
   * @param string $DepartmentID
   * @param string $RowVersionNumber
   * @access public
   */
  public function __construct($OrderItemID, $OrderID, $QuoteItemID, $StockItemID, $StockItemDescription, $OrderedQuantity, $DeliveredQuantity, $InvoicedQuantity, $StockItemCost, $StockItemPrice, $DiscountRate, $ActualPrice, $TaxCode, $TaxRate, $NetAmount, $TaxAmount, $GrossAmount, $LocationID, $SublocationID, $CreationDate, $Notes, $Notes2, $GLAccountCode, $OpeningStockGLAccountCode, $DepartmentID, $RowVersionNumber)
  {
    $this->OrderItemID = $OrderItemID;
    $this->OrderID = $OrderID;
    $this->QuoteItemID = $QuoteItemID;
    $this->StockItemID = $StockItemID;
    $this->StockItemDescription = $StockItemDescription;
    $this->OrderedQuantity = $OrderedQuantity;
    $this->DeliveredQuantity = $DeliveredQuantity;
    $this->InvoicedQuantity = $InvoicedQuantity;
    $this->StockItemCost = $StockItemCost;
    $this->StockItemPrice = $StockItemPrice;
    $this->DiscountRate = $DiscountRate;
    $this->ActualPrice = $ActualPrice;
    $this->TaxCode = $TaxCode;
    $this->TaxRate = $TaxRate;
    $this->NetAmount = $NetAmount;
    $this->TaxAmount = $TaxAmount;
    $this->GrossAmount = $GrossAmount;
    $this->LocationID = $LocationID;
    $this->SublocationID = $SublocationID;
    $this->CreationDate = $CreationDate;
    $this->Notes = $Notes;
    $this->Notes2 = $Notes2;
    $this->GLAccountCode = $GLAccountCode;
    $this->OpeningStockGLAccountCode = $OpeningStockGLAccountCode;
    $this->DepartmentID = $DepartmentID;
    $this->RowVersionNumber = $RowVersionNumber;
  }

}
