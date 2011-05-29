<?php

class StockItemDefaults
{

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
   * @var string $TaxID
   * @access public
   */
  public $TaxID;

  /**
   * 
   * @var string $ItemTypeID
   * @access public
   */
  public $ItemTypeID;

  /**
   * 
   * @var string $AuthorUserID
   * @access public
   */
  public $AuthorUserID;

  /**
   * 
   * @var string $ItemGroupID
   * @access public
   */
  public $ItemGroupID;

  /**
   * 
   * @var string $ItemSubGroupID
   * @access public
   */
  public $ItemSubGroupID;

  /**
   * 
   * @var string $SalesGLAccountCode
   * @access public
   */
  public $SalesGLAccountCode;

  /**
   * 
   * @var string $PurchasesGLAccountCode
   * @access public
   */
  public $PurchasesGLAccountCode;

  /**
   * 
   * @var string $WorkInProgressGLAccountCode
   * @access public
   */
  public $WorkInProgressGLAccountCode;

  /**
   * 
   * @var string $ClosingWorkInProgressGLAccountCode
   * @access public
   */
  public $ClosingWorkInProgressGLAccountCode;

  /**
   * 
   * @var string $StockGLAccountCode
   * @access public
   */
  public $StockGLAccountCode;

  /**
   * 
   * @var string $ClosingStockGLAccountCode
   * @access public
   */
  public $ClosingStockGLAccountCode;

  /**
   * 
   * @var boolean $UpdateOnHand
   * @access public
   */
  public $UpdateOnHand;

  /**
   * 
   * @var boolean $IsFranchise
   * @access public
   */
  public $IsFranchise;

  /**
   * 
   * @param string $LocationID
   * @param string $SubLocationID
   * @param string $TaxID
   * @param string $ItemTypeID
   * @param string $AuthorUserID
   * @param string $ItemGroupID
   * @param string $ItemSubGroupID
   * @param string $SalesGLAccountCode
   * @param string $PurchasesGLAccountCode
   * @param string $WorkInProgressGLAccountCode
   * @param string $ClosingWorkInProgressGLAccountCode
   * @param string $StockGLAccountCode
   * @param string $ClosingStockGLAccountCode
   * @param boolean $UpdateOnHand
   * @param boolean $IsFranchise
   * @access public
   */
  public function __construct($LocationID, $SubLocationID, $TaxID, $ItemTypeID, $AuthorUserID, $ItemGroupID, $ItemSubGroupID, $SalesGLAccountCode, $PurchasesGLAccountCode, $WorkInProgressGLAccountCode, $ClosingWorkInProgressGLAccountCode, $StockGLAccountCode, $ClosingStockGLAccountCode, $UpdateOnHand, $IsFranchise)
  {
    $this->LocationID = $LocationID;
    $this->SubLocationID = $SubLocationID;
    $this->TaxID = $TaxID;
    $this->ItemTypeID = $ItemTypeID;
    $this->AuthorUserID = $AuthorUserID;
    $this->ItemGroupID = $ItemGroupID;
    $this->ItemSubGroupID = $ItemSubGroupID;
    $this->SalesGLAccountCode = $SalesGLAccountCode;
    $this->PurchasesGLAccountCode = $PurchasesGLAccountCode;
    $this->WorkInProgressGLAccountCode = $WorkInProgressGLAccountCode;
    $this->ClosingWorkInProgressGLAccountCode = $ClosingWorkInProgressGLAccountCode;
    $this->StockGLAccountCode = $StockGLAccountCode;
    $this->ClosingStockGLAccountCode = $ClosingStockGLAccountCode;
    $this->UpdateOnHand = $UpdateOnHand;
    $this->IsFranchise = $IsFranchise;
  }

}
