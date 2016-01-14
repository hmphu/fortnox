<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 10:57:02
 */

namespace hmphu\fortnox\models;

/**
 * Class SupplierInvoice
 * @package hmphu\fortnox\models
 */
class SupplierInvoice extends BaseModel
{
    
    /**
     * Direct url to the record
     * @var string
     */
    private $Url;
    
    /**
     * Administration fee
     * @var float
     */
    public $AdministrationFee;
    
    /**
     * Balance of invoice
     * @var string
     */
    private $Balance;
    
    /**
     * If the invoice is bookkept
     * @var boolean
     */
    private $Booked;
    
    /**
     * If the invoice is cancelled
     * @var boolean
     */
    private $Cancelled;
    
    /**
     * Comments
     * @var string
     */
    public $Comments;
    
    /**
     * Cost Center
     * @var string
     */
    public $CostCenter;
    
    /**
     * If invoice is a Credit invoice (to post a credit invoice, use negative delivery quantity)
     * @var boolean
     */
    private $Credit;
    
    /**
     * Reference to credit invoice, if one exists.
     * @var integer
     */
    public $CreditReference;
    
    /**
     * Currency
     * @var string
     */
    public $Currency;
    
    /**
     * Currency rate
     * @var float
     */
    public $CurrencyRate;
    
    /**
     * Currency unit
     * @var float
     */
    public $CurrencyUnit;
    
    /**
     * Disable payment file
     * @var boolean
     */
    public $DisablePaymentFile;
    
    /**
     * Due date (You must specify this date even if you have posted terms of payment)
     * @var date
     */
    public $DueDate;
    
    /**
     * External invoice number
     * @var string
     */
    public $ExternalInvoiceNumber;
    
    /**
     * External invoice series
     * @var string
     */
    public $ExternalInvoiceSeries;
    
    /**
     * Freight
     * @var float
     */
    public $Freight;
    
    /**
     * Given Number
     * @var float
     */
    public $GivenNumber;
    
    /**
     * Invoice date
     * @var date
     */
    public $InvoiceDate;
    
    /**
     * Invoice Number
     * @var date
     */
    public $InvoiceNumber;
    
    /**
     * OCR number
     * @var string
     */
    public $OCR;
    
    /**
     * Reference to offer number
     * @var string
     */
    public $OurReference;
    
    /**
     * Project code
     * @var integer
     */
    public $Project;
    
    /**
     * Round of amount
     * @var float
     */
    private $RoundOffValue;
    
    /**
     * Sales type. Can be STOCK/SERVICE. SERVICE requires VATType=EUINTERNAL.
     * @var string
     */
    public $SalesType;
    
    /**
     * @var object
     */
    private $SupplierInvoiceRows;
    
    /**
     * Supplier number
     * @var float
     */
    public $SupplierNumber;
    
    /**
     * Supplier name
     * @var string
     */
    private $SupplierName;
    
    /**
     * Total amount
     * @var float
     */
    private $Total;
    
    /**
     * Vat amount
     * @var float
     */
    public $VAT;
    
    /**
     * Vat type. Can be NORMAL/EUINTERNAL/REVERSE
     */
    private $VATType;
    
    /**
     * Customer reference
     * @var string
     */
    public $YourReference;
}
