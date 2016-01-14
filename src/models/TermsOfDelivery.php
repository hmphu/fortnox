<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:14:56
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 11:12:30
 */

namespace hmphu\fortnox\models;

/**
 * Class TermsOfDelivery
 * @package hmphu\fortnox\models
 */
class TermsOfDelivery extends BaseModel
{
    
    /**
     * Direct url to the record
     * @var string
     */
    private $Url;
    
    /**
     * Code of the term of delivery
     * @var string
     */
    public $Code;
    
    /**
     * Description of the term of delivery
     * @var string
     */
    public $Description;
}
