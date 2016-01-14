<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:14:56
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 11:17:18
 */

namespace hmphu\fortnox\models;

/**
 * Class VoucherSeries
 * @package hmphu\fortnox\models
 */
class VoucherSeries extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * The code of the voucher series
     * @var string
     */
    public $Code;
    
    /**
     * Description of the voucher series
     * @var string
     */
    public $Description;
    
    /**
     * If manual
     * @var boolean
     */
    public $Manual;
    
    /**
     * Next number in the series
     * @var integer
     */
    private $NextVoucherNumber;
    
    /**
     * Id of the financial year
     * @var integer
     */
    private $Year;
}
