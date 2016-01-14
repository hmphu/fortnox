<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:14:56
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 11:22:36
 */

namespace hmphu\fortnox\models;

/**
 * Class WayOfDelivery
 * @package hmphu\fortnox\models
 */
class WayOfDelivery extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * The code of the way of delivery
     * @var string
     */
    public $Code;
    
    /**
     * The description of the way of delivery
     * @var string
     */
    public $Description;
}
