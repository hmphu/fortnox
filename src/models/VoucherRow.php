<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:14:56
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 11:21:19
 */

namespace hmphu\fortnox\models;

/**
 * Class VoucherRow
 * @package hmphu\fortnox\models
 */
class VoucherRow extends BaseModel
{
    
    /**
     * Account number. The number must be of an existing active account.
     * @var integer, 4 digits
     */
    public $Account;
    
    /**
     * Code of the cost center. The code must be of an existing cost center.
     * @var string
     */
    public $CostCenter;
    
    /**
     * Amount of credit.
     * @var float, 14 digits (incl. decimals)
     */
    public $Credit;
    
    /**
     * Description of the row. If not provided the description of the account will be used.
     * @var string
     */
    public $Description;
    
    /**
     * Amount of debit.
     * @var float, 14 digits (incl. decimals)
     */
    public $Debit;
    
    /**
     * Code of the project. The code must be of an existing project.
     * @var integer
     */
    public $Project;
    
    /**
     * If the row is marked as removed.
     * @var boolean, read-only
     */
    private $Removed;
    
    /**
     * Transaction information regarding the row.
     * @var string, 100 characters
     */
    public $TransactionInformation;
}
