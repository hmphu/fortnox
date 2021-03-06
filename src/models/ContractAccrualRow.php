<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 18:16:00
 */

namespace hmphu\fortnox\models;

/**
 * Class ContractAccrualRow
 * @package hmphu\fortnox\models
 */
class ContractAccrualRow extends BaseModel
{
    
    /**
     * Account number 	4 digits
     * @var integer
     */
    public $Account;
    
    /**
     * Code of the cost center
     * @var string
     */
    public $CostCenter;
    
    /**
     * Credit
     * @var float
     */
    public $Credit;
    
    /**
     * Debit
     * @var float
     */
    public $Debit;
    
    /**
     * Project number
     * @var integer
     */
    public $Project;
    
    /**
     * Transaction information
     * @var string
     */
    public $TransactionInformation;
}
