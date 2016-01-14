<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:14:56
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 11:13:33
 */

namespace hmphu\fortnox\models;

/**
 * Class TermsOfPayment
 * @package hmphu\fortnox\models
 */
class TermsOfPayment extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * The code of the term of payment
     * @var string
     */
    public $Code;
    
    /**
     * The description of the term of payment
     * @var string
     */
    public $Description;
}
