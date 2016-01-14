<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 09:44:22
 */

namespace hmphu\fortnox\models;

/**
 * Class InvoiceAccrualRow
 * @package hmphu\fortnox\models
 */
class InvoiceAccrualRow extends BaseModel
{
    
    /**
     * Account number, 4 digits
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
