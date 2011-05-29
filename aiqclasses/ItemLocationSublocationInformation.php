<?php

class ItemLocationSublocationInformation
{

  /**
   * 
   * @var string $StockItemID
   * @access public
   */
  public $StockItemID;

  /**
   * 
   * @var string $LocationID
   * @access public
   */
  public $LocationID;

  /**
   * 
   * @var string $SubLocationID
   * @access public
   */
  public $SubLocationID;

  /**
   * 
   * @var float $OnHandQuantity
   * @access public
   */
  public $OnHandQuantity;

  /**
   * 
   * @var float $ReservedForPurchasesQuantity
   * @access public
   */
  public $ReservedForPurchasesQuantity;

  /**
   * 
   * @var float $ReservedForSalesQuantity
   * @access public
   */
  public $ReservedForSalesQuantity;

  /**
   * 
   * @param string $StockItemID
   * @param string $LocationID
   * @param string $SubLocationID
   * @param float $OnHandQuantity
   * @param float $ReservedForPurchasesQuantity
   * @param float $ReservedForSalesQuantity
   * @access public
   */
  public function __construct($StockItemID, $LocationID, $SubLocationID, $OnHandQuantity, $ReservedForPurchasesQuantity, $ReservedForSalesQuantity)
  {
    $this->StockItemID = $StockItemID;
    $this->LocationID = $LocationID;
    $this->SubLocationID = $SubLocationID;
    $this->OnHandQuantity = $OnHandQuantity;
    $this->ReservedForPurchasesQuantity = $ReservedForPurchasesQuantity;
    $this->ReservedForSalesQuantity = $ReservedForSalesQuantity;
  }

}
