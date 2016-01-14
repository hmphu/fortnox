<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 16:52:14
 */

namespace hmphu\fortnox\models;

/**
 * Class Account
 * @package hmphu\fortnox\models
 */
class Account extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string, read-only
     */
    private $Url;
    
    /**
     * If the account is actve
     * @var boolean
     */
    public $Active;
    
    /**
     * Opening balance of the account
     * @var float
     */
    public $BalanceBroughtForward;
    
    /**
     * Closing balance of the account
     * @var float, read-only
     */
    private $BalanceCarriedForward;
    
    /**
     * Code of the proposed cost center. The code must be of an existing cost center.
     * @var string
     */
    public $CostCenter;
    
    /**
     * Cost center settings for the account. Can be ALLOWED MANDATORY or NOTALLOWED
     * @var string
     */
    public $CostCenterSettings;
    
    /**
     * Account description
     * @var string, 200 characters, required
     */
    public $Description;
    
    /**
     * Account number
     * @var integer, 4 digits, sortable, required
     */
    public $Number;
    
    /**
     * Number of the proposed project. The number must be of an existing project.
     * @var integer
     */
    public $Project;
    
    /**
     * Project settings for the account. Can be ALLOWED MANDATORY or NOTALLOWED
     * @var string
     */
    public $ProjectSettings = 'ALLOWED';
    
    /**
     * SRU code
     * @var integer, 4 or 5 digits, searchable
     */
    public $SRU;
    
    /**
     * Proposed transaction information
     * @var string, 100 characters
     */
    public $TransactionInformation;
    
    /**
     * Transaction information settings for the account. Can be ALLOWED MANDATORY or NOTALLOWED
     * @var string
     */
    public $TransactionInformationSettings = 'ALLOWED';
    
    /**
     * VAT code
     * @var string
     */
    public $VATCode;
    
    /**
     * Id of the financial year.
     * @var integer, read-only
     */
    private $Year;
}
