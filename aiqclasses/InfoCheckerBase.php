<?php

class InfoCheckerBase
{

  /**
   * 
   * @var int $IdLength
   * @access public
   */
  public $IdLength;

  /**
   * 
   * @var int $CodeLength
   * @access public
   */
  public $CodeLength;

  /**
   * 
   * @var int $DescriptionLength
   * @access public
   */
  public $DescriptionLength;

  /**
   * 
   * @var int $AuthorLength
   * @access public
   */
  public $AuthorLength;

  /**
   * 
   * @param int $IdLength
   * @param int $CodeLength
   * @param int $DescriptionLength
   * @param int $AuthorLength
   * @access public
   */
  public function __construct($IdLength, $CodeLength, $DescriptionLength, $AuthorLength)
  {
    $this->IdLength = $IdLength;
    $this->CodeLength = $CodeLength;
    $this->DescriptionLength = $DescriptionLength;
    $this->AuthorLength = $AuthorLength;
  }

}
