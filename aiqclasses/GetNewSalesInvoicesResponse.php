<?php

class GetNewSalesInvoicesResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfInvoice $GetNewSalesInvoicesResult
   * @access public
   */
  public $GetNewSalesInvoicesResult;

  /**
   * 
   * @param WSResult2OfArrayOfInvoice $GetNewSalesInvoicesResult
   * @access public
   */
  public function __construct($GetNewSalesInvoicesResult)
  {
    $this->GetNewSalesInvoicesResult = $GetNewSalesInvoicesResult;
  }

}
