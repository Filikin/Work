<?php

class GetCreditNotesByCustomerCodeResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfCreditNote $GetCreditNotesByCustomerCodeResult
   * @access public
   */
  public $GetCreditNotesByCustomerCodeResult;

  /**
   * 
   * @param WSResult2OfArrayOfCreditNote $GetCreditNotesByCustomerCodeResult
   * @access public
   */
  public function __construct($GetCreditNotesByCustomerCodeResult)
  {
    $this->GetCreditNotesByCustomerCodeResult = $GetCreditNotesByCustomerCodeResult;
  }

}
