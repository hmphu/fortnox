<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 10:05:20
 */

namespace hmphu\fortnox\models;

/**
 * Class LockedPeriod
 * @package hmphu\fortnox\models
 */
class LockedPeriod extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * End date of the locked period
     * @var date
     */
    private $EndDate;
}
