<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 09:42:24
 */

namespace hmphu\fortnox\models;

/**
 * Class  InvoiceAccrual
 * @package hmphu\fortnox\models
 */
class InvoiceAccrual extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Account for the accrual, 4 digits
     * @var integer
     */
    public $AccrualAccount;
    
    /**
     * Description of the accrual
     * @var string
     */
    public $Description;
    
    /**
     * End date
     * @var date
     */
    public $EndDate;
    
    /**
     *
     */
    private $InvoiceAccrualRows;
    
    /**
     * Invoice number
     * @var integer
     */
    public $InvoiceNumber;
    
    /**
     * Type of period: MONTHLY / BIMONTHLY / QUARTERLY / SEMIANNUALLY / ANNUALLY / {X}_MONTHS
     * @var string
     */
    public $Period;
    
    /**
     * Account for the revenue, 4 digits
     * @var integer
     */
    public $RevenueAccount;
    
    /**
     * Start date
     * @var date
     */
    public $StartDate;
    
    /**
     * Total times of accruals
     * @var integer
     */
    private $Times;
    
    /**
     * Total of the accrual
     * @var float
     */
    public $Total;
    
    /**
     * Is VAT included
     * @var boolean
     */
    public $VATIncluded;
}
