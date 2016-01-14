<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 10:45:28
 */

namespace hmphu\fortnox\models;

/**
 * Class SupplierInvoiceAccrualRow
 * @package hmphu\fortnox\models
 */
class SupplierInvoiceAccrualRow extends BaseModel
{
    
    /**
     * Account number, 4 digits
     * @var integer
     */
    public $Account;
    
    /**
     * Cost Center Code
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
