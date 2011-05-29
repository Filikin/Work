<?php

class GetInvoicesByExternalReferenceResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfInvoice $GetInvoicesByExternalReferenceResult
   * @access public
   */
  public $GetInvoicesByExternalReferenceResult;

  /**
   * 
   * @param WSResult2OfArrayOfInvoice $GetInvoicesByExternalReferenceResult
   * @access public
   */
  public function __construct($GetInvoicesByExternalReferenceResult)
  {
    $this->GetInvoicesByExternalReferenceResult = $GetInvoicesByExternalReferenceResult;
  }

}
