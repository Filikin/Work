<?php

class GetNewSalesCreditNotesResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfCreditNote $GetNewSalesCreditNotesResult
   * @access public
   */
  public $GetNewSalesCreditNotesResult;

  /**
   * 
   * @param WSResult2OfArrayOfCreditNote $GetNewSalesCreditNotesResult
   * @access public
   */
  public function __construct($GetNewSalesCreditNotesResult)
  {
    $this->GetNewSalesCreditNotesResult = $GetNewSalesCreditNotesResult;
  }

}
