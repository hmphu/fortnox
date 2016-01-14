<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 09:34:06
 */

namespace hmphu\fortnox\models;

/**
 * Class CostCenter
 * @package hmphu\fortnox\models
 */
class CostCenter extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * The code of the cost center
     * @var string
     */
    public $Code;
    
    /**
     * The description of the cost center
     * @var string
     */
    public $Description;
    
    /**
     * The note of the cost center
     * @var string
     */
    public $Note;
    
    /**
     * If the cost center is active or not
     * @var boolean
     */
    public $Active;
}
