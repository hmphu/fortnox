<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 09:49:04
 */

namespace hmphu\fortnox\models;

/**
 * Class InvoicePayment
 * @package hmphu\fortnox\models
 */
class InvoicePayment extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Amount of the payment
     * @var float
     */
    public $Amount;
    
    /**
     * Amount in the specified currency of the payment
     * @var float
     */
    public $AmountCurrency;
    
    /**
     * If the payment is booked or not
     * @var boolean
     */
    private $Booked;
    
    /**
     * Currency of the payment 	3 characters
     * @var string
     */
    private $Currency;
    
    /**
     * The currency rate
     * @var float
     */
    public $CurrencyRate;
    
    /**
     * The currency unit
     * @var float
     */
    private $CurrencyUnit;
    
    /**
     * External invoice reference
     * @var string
     */
    private $ExternalInvoiceReference1;
    
    /**
     * External invoice reference
     * @var string
     */
    private $ExternalInvoiceReference2;
    
    /**
     * Customer name of the invoice
     * @var string
     */
    private $InvoiceCustomerName;
    
    /**
     * Customer number of the invoice
     * @var string
     */
    private $InvoiceCustomerNumber;
    
    /**
     * Invoice number
     * @var integer
     */
    public $InvoiceNumber;
    
    /**
     * Due date of the invoice
     * @var date
     */
    private $InvoiceDueDate;
    
    /**
     * OCR of the invoice
     * @var string
     */
    public $InvoiceOCR;
    
    /**
     * Invoice total
     * @var float
     */
    private $InvoiceTotal;
    
    /**
     * Code of the mode of payment
     * @var string
     */
    public $ModeOfPayment;
    
    /**
     * Payment number
     * @var integer
     */
    private $Number;
    
    /**
     * Date of the payment
     * @var date
     */
    public $PaymentDate;
    
    /**
     * Number of the voucher
     * @var integer
     */
    private $VoucherNumber;
    
    /**
     * Series of the voucher
     * @var string
     */
    private $VoucherSeries;
    
    /**
     * Id of the voucher year
     * @var integer
     */
    private $VoucherYear;
    
    /**
     * Payment source 	manual / direct
     * @var string
     */
    private $Source;
    
    /**
     * @var WriteOff
     */
    private $WriteOffs;
}
