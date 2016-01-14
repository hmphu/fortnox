<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 10:31:00
 */

namespace hmphu\fortnox\models;

/**
 * Class PriceList
 * @package hmphu\fortnox\models
 */
class PriceList extends BaseModel
{
    
    /**
     * Direct url to the record
     * @var string
     */
    private $Url;
    
    /**
     * Code of pricelist
     * @var string
     */
    public $Code;
    
    /**
     * Description of pricelist
     * @var string
     */
    public $Description;
    
    /**
     * Comments for pricelist
     * @var string
     */
    public $Comments;
    
    /**
     * If the price list is pre selected
     * @var boolean
     */
    private $PreSelected;
}
