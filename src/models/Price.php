<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 10:32:43
 */

namespace hmphu\fortnox\models;

/**
 * Class Price
 * @package hmphu\fortnox\models
 */
class Price extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * The article number
     * @var string
     */
    public $ArticleNumber;
    
    /**
     * Date of the last modification
     * @var date
     */
    private $Date;
    
    /**
     * The quantity from where the price is applicable.
     * @var float
     */
    public $FromQuantity;
    
    /**
     * Percent of original price
     * @var float
     */
    public $Percent;
    
    /**
     * The price
     * @var float
     */
    public $Price;
    
    /**
     * Price list of the price
     * @var string
     */
    public $PriceList;
}
