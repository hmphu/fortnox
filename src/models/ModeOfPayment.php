<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 10:06:44
 */

namespace hmphu\fortnox\models;

/**
 * Class ModeOfPayment
 * @package hmphu\fortnox\models
 */
class ModeOfPayment extends BaseModel
{
    
    /**
     * Direct url to the record
     * @var string
     */
    private $Url;
    
    /**
     * Code for mode of payment
     * @var string
     */
    public $Code;
    
    /**
     * Description of mode of payment
     * @var string
     */
    public $Description;
    
    /**
     * Account number, 4 digits
     * @var integer
     */
    public $AccountNumber;
}
