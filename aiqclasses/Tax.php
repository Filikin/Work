<?php

class Tax
{

  /**
   * 
   * @var float $Rate
   * @access public
   */
  public $Rate;

  /**
   * 
   * @var boolean $EuropeanCommunitySales
   * @access public
   */
  public $EuropeanCommunitySales;

  /**
   * 
   * @var boolean $EuropeanCommunityPurchases
   * @access public
   */
  public $EuropeanCommunityPurchases;

  /**
   * 
   * @var boolean $IsDefault
   * @access public
   */
  public $IsDefault;

  /**
   * 
   * @var boolean $IsTaxExclude
   * @access public
   */
  public $IsTaxExclude;

  /**
   * 
   * @var boolean $IsStandardRate
   * @access public
   */
  public $IsStandardRate;

  /**
   * 
   * @var float $GrossThreshold
   * @access public
   */
  public $GrossThreshold;

  /**
   * 
   * @var float $NetThreshold
   * @access public
   */
  public $NetThreshold;

  /**
   * 
   * @var int $TaxTypeId
   * @access public
   */
  public $TaxTypeId;

  /**
   * 
   * @var boolean $SalesTaxInclude
   * @access public
   */
  public $SalesTaxInclude;

  /**
   * 
   * @var boolean $PurchasesTaxInclude
   * @access public
   */
  public $PurchasesTaxInclude;

  /**
   * 
   * @var string $DebitGlAccno
   * @access public
   */
  public $DebitGlAccno;

  /**
   * 
   * @var string $CreditGlAccno
   * @access public
   */
  public $CreditGlAccno;

  /**
   * 
   * @var string $WithHoldingTaxGLAccount
   * @access public
   */
  public $WithHoldingTaxGLAccount;

  /**
   * 
   * @var boolean $IsWithHoldingTax
   * @access public
   */
  public $IsWithHoldingTax;

  /**
   * 
   * @var TaxChecker $Checker
   * @access public
   */
  public $Checker;

  /**
   * 
   * @param float $Rate
   * @param boolean $EuropeanCommunitySales
   * @param boolean $EuropeanCommunityPurchases
   * @param boolean $IsDefault
   * @param boolean $IsTaxExclude
   * @param boolean $IsStandardRate
   * @param float $GrossThreshold
   * @param float $NetThreshold
   * @param int $TaxTypeId
   * @param boolean $SalesTaxInclude
   * @param boolean $PurchasesTaxInclude
   * @param string $DebitGlAccno
   * @param string $CreditGlAccno
   * @param string $WithHoldingTaxGLAccount
   * @param boolean $IsWithHoldingTax
   * @param TaxChecker $Checker
   * @access public
   */
  public function __construct($Rate, $EuropeanCommunitySales, $EuropeanCommunityPurchases, $IsDefault, $IsTaxExclude, $IsStandardRate, $GrossThreshold, $NetThreshold, $TaxTypeId, $SalesTaxInclude, $PurchasesTaxInclude, $DebitGlAccno, $CreditGlAccno, $WithHoldingTaxGLAccount, $IsWithHoldingTax, $Checker)
  {
    $this->Rate = $Rate;
    $this->EuropeanCommunitySales = $EuropeanCommunitySales;
    $this->EuropeanCommunityPurchases = $EuropeanCommunityPurchases;
    $this->IsDefault = $IsDefault;
    $this->IsTaxExclude = $IsTaxExclude;
    $this->IsStandardRate = $IsStandardRate;
    $this->GrossThreshold = $GrossThreshold;
    $this->NetThreshold = $NetThreshold;
    $this->TaxTypeId = $TaxTypeId;
    $this->SalesTaxInclude = $SalesTaxInclude;
    $this->PurchasesTaxInclude = $PurchasesTaxInclude;
    $this->DebitGlAccno = $DebitGlAccno;
    $this->CreditGlAccno = $CreditGlAccno;
    $this->WithHoldingTaxGLAccount = $WithHoldingTaxGLAccount;
    $this->IsWithHoldingTax = $IsWithHoldingTax;
    $this->Checker = $Checker;
  }

}
