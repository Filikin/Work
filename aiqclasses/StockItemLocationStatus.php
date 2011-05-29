<?php

class StockItemLocationStatus
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
   * @var string $Location
   * @access public
   */
  public $Location;

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
   * @var float $ReservedForSale
   * @access public
   */
  public $ReservedForSale;

  /**
   * 
   * @var float $PurchasedButNotReceived
   * @access public
   */
  public $PurchasedButNotReceived;

  /**
   * 
   * @var boolean $TrackQuantity
   * @access public
   */
  public $TrackQuantity;

  /**
   * 
   * @var float $FreeStock
   * @access public
   */
  public $FreeStock;

  /**
   * 
   * @var float $AvailableStock
   * @access public
   */
  public $AvailableStock;

  /**
   * 
   * @param string $StockItemID
   * @param string $LocationID
   * @param string $Location
   * @param string $SubLocationID
   * @param float $OnHandQuantity
   * @param float $ReservedForSale
   * @param float $PurchasedButNotReceived
   * @param boolean $TrackQuantity
   * @param float $FreeStock
   * @param float $AvailableStock
   * @access public
   */
  public function __construct($StockItemID, $LocationID, $Location, $SubLocationID, $OnHandQuantity, $ReservedForSale, $PurchasedButNotReceived, $TrackQuantity, $FreeStock, $AvailableStock)
  {
    $this->StockItemID = $StockItemID;
    $this->LocationID = $LocationID;
    $this->Location = $Location;
    $this->SubLocationID = $SubLocationID;
    $this->OnHandQuantity = $OnHandQuantity;
    $this->ReservedForSale = $ReservedForSale;
    $this->PurchasedButNotReceived = $PurchasedButNotReceived;
    $this->TrackQuantity = $TrackQuantity;
    $this->FreeStock = $FreeStock;
    $this->AvailableStock = $AvailableStock;
  }

}
