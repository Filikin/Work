<?php

class StockItem
{

  /**
   * 
   * @var string $StockItemID
   * @access public
   */
  public $StockItemID;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description;

  /**
   * 
   * @var string $SalesDescription
   * @access public
   */
  public $SalesDescription;

  /**
   * 
   * @var string $ItemGroupID
   * @access public
   */
  public $ItemGroupID;

  /**
   * 
   * @var string $ItemTypeID
   * @access public
   */
  public $ItemTypeID;

  /**
   * 
   * @var string $ItemSubgroupID
   * @access public
   */
  public $ItemSubgroupID;

  /**
   * 
   * @var string $DefaultLocationID
   * @access public
   */
  public $DefaultLocationID;

  /**
   * 
   * @var string $DefaultSublocationID
   * @access public
   */
  public $DefaultSublocationID;

  /**
   * 
   * @var string $TaxCode
   * @access public
   */
  public $TaxCode;

  /**
   * 
   * @var float $ItemPrice
   * @access public
   */
  public $ItemPrice;

  /**
   * 
   * @var boolean $UpdateOnHand
   * @access public
   */
  public $UpdateOnHand;

  /**
   * 
   * @var string $OpeningStockGLAccountCode
   * @access public
   */
  public $OpeningStockGLAccountCode;

  /**
   * 
   * @var string $ClosingStockGLAccountCode
   * @access public
   */
  public $ClosingStockGLAccountCode;

  /**
   * 
   * @var string $DefaultSalesGLAccountCode
   * @access public
   */
  public $DefaultSalesGLAccountCode;

  /**
   * 
   * @var string $DefaultPurchasesGLAccountCode
   * @access public
   */
  public $DefaultPurchasesGLAccountCode;

  /**
   * 
   * @var string $OpeningWorkInProgressGLAccountCode
   * @access public
   */
  public $OpeningWorkInProgressGLAccountCode;

  /**
   * 
   * @var string $ClosingWorkInProgressGLAccountCode
   * @access public
   */
  public $ClosingWorkInProgressGLAccountCode;

  /**
   * 
   * @var boolean $Active
   * @access public
   */
  public $Active;

  /**
   * 
   * @var float $ReOrderLevel
   * @access public
   */
  public $ReOrderLevel;

  /**
   * 
   * @var float $ItemPrice2
   * @access public
   */
  public $ItemPrice2;

  /**
   * 
   * @var float $ItemPrice3
   * @access public
   */
  public $ItemPrice3;

  /**
   * 
   * @var float $ItemPrice4
   * @access public
   */
  public $ItemPrice4;

  /**
   * 
   * @var float $ItemPrice5
   * @access public
   */
  public $ItemPrice5;

  /**
   * 
   * @var float $ItemPrice6
   * @access public
   */
  public $ItemPrice6;

  /**
   * 
   * @var float $ItemPrice7
   * @access public
   */
  public $ItemPrice7;

  /**
   * 
   * @var float $ItemPrice8
   * @access public
   */
  public $ItemPrice8;

  /**
   * 
   * @var boolean $UseMarginWarning
   * @access public
   */
  public $UseMarginWarning;

  /**
   * 
   * @var float $Margin
   * @access public
   */
  public $Margin;

  /**
   * 
   * @var string $UniversalResourceNumber
   * @access public
   */
  public $UniversalResourceNumber;

  /**
   * 
   * @var string $RowVersionNumber
   * @access public
   */
  public $RowVersionNumber;

  /**
   * 
   * @param string $StockItemID
   * @param string $Description
   * @param string $SalesDescription
   * @param string $ItemGroupID
   * @param string $ItemTypeID
   * @param string $ItemSubgroupID
   * @param string $DefaultLocationID
   * @param string $DefaultSublocationID
   * @param string $TaxCode
   * @param float $ItemPrice
   * @param boolean $UpdateOnHand
   * @param string $OpeningStockGLAccountCode
   * @param string $ClosingStockGLAccountCode
   * @param string $DefaultSalesGLAccountCode
   * @param string $DefaultPurchasesGLAccountCode
   * @param string $OpeningWorkInProgressGLAccountCode
   * @param string $ClosingWorkInProgressGLAccountCode
   * @param boolean $Active
   * @param float $ReOrderLevel
   * @param float $ItemPrice2
   * @param float $ItemPrice3
   * @param float $ItemPrice4
   * @param float $ItemPrice5
   * @param float $ItemPrice6
   * @param float $ItemPrice7
   * @param float $ItemPrice8
   * @param boolean $UseMarginWarning
   * @param float $Margin
   * @param string $UniversalResourceNumber
   * @param string $RowVersionNumber
   * @access public
   */
  public function __construct($StockItemID, $Description, $SalesDescription, $ItemGroupID, $ItemTypeID, $ItemSubgroupID, $DefaultLocationID, $DefaultSublocationID, $TaxCode, $ItemPrice, $UpdateOnHand, $OpeningStockGLAccountCode, $ClosingStockGLAccountCode, $DefaultSalesGLAccountCode, $DefaultPurchasesGLAccountCode, $OpeningWorkInProgressGLAccountCode, $ClosingWorkInProgressGLAccountCode, $Active, $ReOrderLevel, $ItemPrice2, $ItemPrice3, $ItemPrice4, $ItemPrice5, $ItemPrice6, $ItemPrice7, $ItemPrice8, $UseMarginWarning, $Margin, $UniversalResourceNumber, $RowVersionNumber)
  {
    $this->StockItemID = $StockItemID;
    $this->Description = $Description;
    $this->SalesDescription = $SalesDescription;
    $this->ItemGroupID = $ItemGroupID;
    $this->ItemTypeID = $ItemTypeID;
    $this->ItemSubgroupID = $ItemSubgroupID;
    $this->DefaultLocationID = $DefaultLocationID;
    $this->DefaultSublocationID = $DefaultSublocationID;
    $this->TaxCode = $TaxCode;
    $this->ItemPrice = $ItemPrice;
    $this->UpdateOnHand = $UpdateOnHand;
    $this->OpeningStockGLAccountCode = $OpeningStockGLAccountCode;
    $this->ClosingStockGLAccountCode = $ClosingStockGLAccountCode;
    $this->DefaultSalesGLAccountCode = $DefaultSalesGLAccountCode;
    $this->DefaultPurchasesGLAccountCode = $DefaultPurchasesGLAccountCode;
    $this->OpeningWorkInProgressGLAccountCode = $OpeningWorkInProgressGLAccountCode;
    $this->ClosingWorkInProgressGLAccountCode = $ClosingWorkInProgressGLAccountCode;
    $this->Active = $Active;
    $this->ReOrderLevel = $ReOrderLevel;
    $this->ItemPrice2 = $ItemPrice2;
    $this->ItemPrice3 = $ItemPrice3;
    $this->ItemPrice4 = $ItemPrice4;
    $this->ItemPrice5 = $ItemPrice5;
    $this->ItemPrice6 = $ItemPrice6;
    $this->ItemPrice7 = $ItemPrice7;
    $this->ItemPrice8 = $ItemPrice8;
    $this->UseMarginWarning = $UseMarginWarning;
    $this->Margin = $Margin;
    $this->UniversalResourceNumber = $UniversalResourceNumber;
    $this->RowVersionNumber = $RowVersionNumber;
  }

}
