<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 09:50:53
 */

namespace hmphu\fortnox\models;

/**
 * Class  WriteOff
 * @package hmphu\fortnox\models
 */
class WriteOff extends BaseModel
{
    
    /**
     * Amount of the writeoff
     * @var float
     */
    public $Amount;
    
    /**
     * Account number of the write off, 4 characters
     * @var integer
     */
    public $AccountNumber;
    
    /**
     * Code of the cost center
     * @var string
     */
    public $CostCenter;
    
    /**
     * Currency of the payment, 3 characters
     * @var string
     */
    private $Currency;
    
    /**
     * Description of the write off
     * @var string
     */
    private $Description;
    
    /**
     * Code of the transaction information
     * @var integer
     */
    public $TransactionInformationCode;
    
    /**
     * Project number of the write off
     * @var integer
     */
    public $Project;
}
