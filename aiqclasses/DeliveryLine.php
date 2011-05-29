<?php

class DeliveryLine
{

  /**
   * 
   * @var int $DeliveryItemID
   * @access public
   */
  public $DeliveryItemID;

  /**
   * 
   * @var int $OrderID
   * @access public
   */
  public $OrderID;

  /**
   * 
   * @var int $OrderItemID
   * @access public
   */
  public $OrderItemID;

  /**
   * 
   * @var string $DeliveryReference
   * @access public
   */
  public $DeliveryReference;

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
   * @var DeliveryStatus $Status
   * @access public
   */
  public $Status;

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
   * @var dateTime $LineDate
   * @access public
   */
  public $LineDate;

  /**
   * 
   * @var string $DepartmentID
   * @access public
   */
  public $DepartmentID;

  /**
   * 
   * @param int $DeliveryItemID
   * @param int $OrderID
   * @param int $OrderItemID
   * @param string $DeliveryReference
   * @param string $StockItemID
   * @param string $StockItemDescription
   * @param float $DeliveredQuantity
   * @param float $InvoicedQuantity
   * @param DeliveryStatus $Status
   * @param string $LocationID
   * @param string $SublocationID
   * @param dateTime $LineDate
   * @param string $DepartmentID
   * @access public
   */
  public function __construct($DeliveryItemID, $OrderID, $OrderItemID, $DeliveryReference, $StockItemID, $StockItemDescription, $DeliveredQuantity, $InvoicedQuantity, $Status, $LocationID, $SublocationID, $LineDate, $DepartmentID)
  {
    $this->DeliveryItemID = $DeliveryItemID;
    $this->OrderID = $OrderID;
    $this->OrderItemID = $OrderItemID;
    $this->DeliveryReference = $DeliveryReference;
    $this->StockItemID = $StockItemID;
    $this->StockItemDescription = $StockItemDescription;
    $this->DeliveredQuantity = $DeliveredQuantity;
    $this->InvoicedQuantity = $InvoicedQuantity;
    $this->Status = $Status;
    $this->LocationID = $LocationID;
    $this->SublocationID = $SublocationID;
    $this->LineDate = $LineDate;
    $this->DepartmentID = $DepartmentID;
  }

}
