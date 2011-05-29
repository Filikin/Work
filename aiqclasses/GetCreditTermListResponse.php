<?php

class GetCreditTermListResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfCreditTerm $GetCreditTermListResult
   * @access public
   */
  public $GetCreditTermListResult;

  /**
   * 
   * @param WSResult2OfArrayOfCreditTerm $GetCreditTermListResult
   * @access public
   */
  public function __construct($GetCreditTermListResult)
  {
    $this->GetCreditTermListResult = $GetCreditTermListResult;
  }

}
