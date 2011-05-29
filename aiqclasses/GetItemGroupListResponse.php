<?php

class GetItemGroupListResponse
{

  /**
   * 
   * @var WSResult2OfArrayOfItemGroup $GetItemGroupListResult
   * @access public
   */
  public $GetItemGroupListResult;

  /**
   * 
   * @param WSResult2OfArrayOfItemGroup $GetItemGroupListResult
   * @access public
   */
  public function __construct($GetItemGroupListResult)
  {
    $this->GetItemGroupListResult = $GetItemGroupListResult;
  }

}
