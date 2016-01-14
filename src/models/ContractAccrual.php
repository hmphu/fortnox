<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 16:53:26
 */

namespace hmphu\fortnox\models;

/**
 * Class ContractAccrual
 * @package hmphu\fortnox\models
 */
class ContractAccrual extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Account for the accrual 	4 digits
     * @var integer
     */
    public $AccrualAccount;
    
    /**
     * Account for the cost 	4 digits
     * @var integer
     */
    public $CostAccount;
    
    /**
     * Description
     * @var string
     */
    public $Description;
    
    private $AccrualRows;
    
    /**
     * Document number
     * @var integer
     */
    public $DocumentNumber;
    
    /**
     * Type of period: MONTHLY / BIMONTHLY / QUARTERLY / SEMIANNUALLY / ANNUALLY
     * @var string
     */
    private $Period = 'MONTHLY';
    
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
