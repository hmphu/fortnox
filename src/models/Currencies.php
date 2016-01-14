<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 09:36:03
 */

namespace hmphu\fortnox\models;

/**
 * Class  Currencies
 * @package hmphu\fortnox\models
 */
class Currencies extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * The buy rate of the currency
     * @var float
     */
    public $BuyRate;
    
    /**
     * The code of the currency
     * @var string
     */
    public $Code;
    
    /**
     * The date of retrieval of the buy/sell rates
     * @var date
     */
    private $Date;
    
    /**
     * The description of the currency
     * @var string
     */
    public $Description;
    
    /**
     * The sell rate of the currency
     * @var float
     */
    public $SellRate;
    
    /**
     * The unit of the currency
     * @var float
     */
    public $Unit;
}
