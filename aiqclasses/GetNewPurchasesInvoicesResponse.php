<?php

class GetNewPurchasesInvoicesResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfInvoice $GetNewPurchasesInvoicesResult
   * @access public
   */
  public $GetNewPurchasesInvoicesResult;

  /**
   * 
   * @param WSResult2OfArrayOfInvoice $GetNewPurchasesInvoicesResult
   * @access public
   */
  public function __construct($GetNewPurchasesInvoicesResult)
  {
    $this->GetNewPurchasesInvoicesResult = $GetNewPurchasesInvoicesResult;
  }

}
