<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:14:56
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 11:20:03
 */

namespace hmphu\fortnox\models;

/**
 * Class Voucher
 * @package hmphu\fortnox\models
 */
class Voucher extends BaseModel
{
    
    /**
     * Direct URL to the record.
     * @var string, read-only
     */
    private $Url;
    
    /**
     * Comments of the voucher.
     * @var string, 1000 characters
     */
    public $Comments;
    
    /**
     * Code of the cost center.
     * The code must be of an existing cost center.
     * @var string, searchable
     */
    public $CostCenter;
    
    /**
     * Description of the voucher.
     * @var string, 200 characters, required
     */
    public $Description;
    
    /**
     * Code of the project.
     * The code must be of an existing project.
     * @var integer
     */
    public $Project;
    
    /**
     * Reference number, for example an invoice number.
     * @var string, sortable, read-only
     */
    private $ReferenceNumber;
    
    /**
     * Reference type.
     * Can be INVOICE SUPPLIERINVOICE INVOICEPAYMENT SUPPLIERPAYMENT MANUAL CASHINVOICE or ACCRUAL
     * @var string, sortable, read-only
     */
    private $ReferenceType;
    
    /**
     * Date of the transaction.
     * Must be a valid date according to our date format.
     * @var date, required
     */
    public $TransactionDate;
    
    /**
     * Number of the voucher
     * @var integer, sortable, read-only
     */
    private $VoucherNumber;
    
    /**
     * The properties for the object in this array is listed in the table for “Voucher Rows”.
     * @var array
     */
    public $VoucherRows;
    
    /**
     * Code of the voucher series.
     * The code must be of an existing voucher series.
     * @var string, sortable
     */
    public $VoucherSeries;
    
    /**
     * Id of the year of the voucher.
     * @var integer, read-only
     */
    private $Year;
}
