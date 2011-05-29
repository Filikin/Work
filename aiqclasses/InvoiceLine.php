<?php

class InvoiceLine
{

  /**
   * 
   * @var int $InvoiceItemID
   * @access public
   */
  public $InvoiceItemID;

  /**
   * 
   * @var int $InvoiceID
   * @access public
   */
  public $InvoiceID;

  /**
   * 
   * @var int $OrderItemID
   * @access public
   */
  public $OrderItemID;

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
   * @var float $InvoicedQuantity
   * @access public
   */
  public $InvoicedQuantity;

  /**
   * 
   * @var float $DeliveredQuantity
   * @access public
   */
  public $DeliveredQuantity;

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
   * @var boolean $AdditionalCost
   * @access public
   */
  public $AdditionalCost;

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
   * @var int $DeliveryItemID
   * @access public
   */
  public $DeliveryItemID;

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
   * @param int $InvoiceItemID
   * @param int $InvoiceID
   * @param int $OrderItemID
   * @param string $StockItemID
   * @param string $StockItemDescription
   * @param float $InvoicedQuantity
   * @param float $DeliveredQuantity
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
   * @param boolean $AdditionalCost
   * @param string $GLAccountCode
   * @param string $OpeningStockGLAccountCode
   * @param int $DeliveryItemID
   * @param string $DepartmentID
   * @param string $RowVersionNumber
   * @access public
   */
  public function __construct($InvoiceItemID, $InvoiceID, $OrderItemID, $StockItemID, $StockItemDescription, $InvoicedQuantity, $DeliveredQuantity, $StockItemCost, $StockItemPrice, $DiscountRate, $ActualPrice, $TaxCode, $TaxRate, $NetAmount, $TaxAmount, $GrossAmount, $LocationID, $SublocationID, $CreationDate, $Notes, $Notes2, $AdditionalCost, $GLAccountCode, $OpeningStockGLAccountCode, $DeliveryItemID, $DepartmentID, $RowVersionNumber)
  {
    $this->InvoiceItemID = $InvoiceItemID;
    $this->InvoiceID = $InvoiceID;
    $this->OrderItemID = $OrderItemID;
    $this->StockItemID = $StockItemID;
    $this->StockItemDescription = $StockItemDescription;
    $this->InvoicedQuantity = $InvoicedQuantity;
    $this->DeliveredQuantity = $DeliveredQuantity;
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
    $this->AdditionalCost = $AdditionalCost;
    $this->GLAccountCode = $GLAccountCode;
    $this->OpeningStockGLAccountCode = $OpeningStockGLAccountCode;
    $this->DeliveryItemID = $DeliveryItemID;
    $this->DepartmentID = $DepartmentID;
    $this->RowVersionNumber = $RowVersionNumber;
  }

}
