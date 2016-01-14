<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 09:38:55
 */

namespace hmphu\fortnox\models;

/**
 * Class FinancialYear
 * @package hmphu\fortnox\models
 */
class FinancialYear extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * The ID of the financial year
     * @var integer
     */
    private $Id;
    
    /**
     * Start date of the financial year
     * @var date
     */
    public $FromDate;
    
    /**
     * End date of the financial year
     * @var date
     */
    public $ToDate;
    
    /**
     * Type of the account chart
     * Must be a valid account chart type, see “Account Charts”.
     * If empty, the type from the previous year will be used.
     * @var string
     */
    public $AccountChartType;
}
