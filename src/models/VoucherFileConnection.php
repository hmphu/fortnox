<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:14:56
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 11:15:48
 */

namespace hmphu\fortnox\models;

/**
 * Class VoucherFileConnection
 * @package hmphu\fortnox\models
 */
class VoucherFileConnection extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Id of the file
     * @var string
     */
    public $FileId;
    
    /**
     * Description of the voucher
     * @var string
     */
    private $VoucherDescription;
    
    /**
     * Voucher number
     * @var string
     */
    public $VoucherNumber;
    
    /**
     * Voucher series
     * @var string
     */
    public $VoucherSeries;
    
    /**
     * Voucher year
     * @var string
     */
    private $VoucherYear;
}
