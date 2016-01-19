<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-18 17:34:49
 */

namespace hmphu\fortnox\models;

/**
 * Class Invoice
 * @package hmphu\fortnox\models
 */
class Invoice extends BaseModel
{
    
    /**
     * Direct url to the record.
     * @var string, read-only
     */
    private $Url;
    
    /**
     * Direct url to the tax reduction for the invoice.
     * This is visible even if no tax reduction exists.
     * @var string, read-only
     */
    private $UrlTaxReductionList;
    
    /**
     * The invoice administration fee.
     * @var float, 12 digits (incl. decimals)
     */
    public $AdministrationFee;
    
    /**
     * VAT of the invoice administration fee.
     * @var float, read-only
     */
    private $AdministrationFeeVAT;
    
    /**
     * Invoice address 1.
     * @var string, 1024 characters
     */
    public $Address1;
    
    /**
     * Invoice address 2.
     * @var string, 1024 characters
     */
    public $Address2;
    
    /**
     * Balance of the invoice.
     * @var float, read-only
     */
    private $Balance;
    
    /**
     * Basis of tax reduction.
     * @var float, read-only
     */
    private $BasisTaxReduction;
    
    /**
     * If the invoice is bookkept.
     * This value can be changed by using the action “bookkeep”.
     * @var boolean, read-only
     */
    private $Booked;
    
    /**
     * If the invoice is cancelled.
     * This value can be changed by using the action “cancel”.
     * @var boolean, read-only
     */
    private $Cancelled;
    
    /**
     * If the invoice is a credit invoice.
     * @var boolean, read-only
     */
    private $Credit;
    
    /**
     * Reference to the credit invoice, if one exits.
     * The reference must be a document number for an existing credit invoice.
     * @var integer
     */
    public $CreditInvoiceReference;
    
    /**
     * City for the invoice address.
     * @var string, 1024 characters
     */
    public $City;
    
    /**
     * Comments of the invoice
     * @var string, 1024 characters
     */
    public $Comments;
    
    /**
     * Reference to the contract, if one exists.
     * @var integer, read-only
     */
    private $ContractReference;
    
    /**
     * Invoice contribution in percent.
     * @var float, read-only
     */
    private $ContributionPercent;
    
    /**
     * Invoice contribution in amount.
     * @var float, read-only
     */
    private $ContributionValue;
    
    /**
     * Country for the invoice address.
     * Must be a name of an existing country.
     * @var string
     */
    public $Country;
    
    /**
     * Code of the cost center.
     * The code must be of an existing cost center.
     * @var string
     */
    public $CostCenter;
    
    /**
     * Code of the currency.
     * The code must be of an existing currency.
     * @var string
     */
    public $Currency;
    
    /**
     * Currency rate used for the invoice.
     * @var float, 16 digits (incl. decimals)
     */
    public $CurrencyRate;
    
    /**
     * Currency unit used for the invoice.
     * @var float, 16 digits (incl. decimals)
     */
    public $CurrencyUnit;
    
    /**
     * Name of the customer.
     * @var string, 1024 characters, searchable, sortable
     */
    public $CustomerName;
    
    /**
     * Customer number of the customer.
     * The customer number must be of an existing customer.
     * @var string, required, searchable, sortable
     */
    public $CustomerNumber;
    
    /**
     * Invoice delivery address 1.
     * @var string, 1024 characters
     */
    public $DeliveryAddress1;
    
    /**
     * Invoice delivery address 2.
     * @var string, 1024 characters
     */
    public $DeliveryAddress2;
    
    /**
     * City for the invoice delivery address.
     * @var string, 1024 characters
     */
    public $DeliveryCity;
    
    /**
     * Country for the invoice delivery address.
     * Must be a name of an existing country.
     * @var string
     */
    public $DeliveryCountry;
    
    /**
     * Date of delivery.
     * Must be a valid date according to our date format.
     * @var date
     */
    public $DeliveryDate;
    
    /**
     * Name of the recipient of the delivery
     * @var string, 1024 characters
     */
    public $DeliveryName;
    
    /**
     * ZipCode for the invoice delivery address.
     * @var string, 1024 characters
     */
    public $DeliveryZipCode;
    
    /**
     * The invoice number.
     * If no document number is provided, the next number in the series will be used.
     * @var integer, searchable, sortable
     */
    public $DocumentNumber;
    
    /**
     * Due date of the invoice.
     * Must be a valid date according to our date format.
     * @var date
     */
    public $DueDate;
    
    /**
     * The properties for this object is listed in the table for “EDI Information”.
     * @var object
     */
    public $EDIInformation;
    
    /**
     * The properties for this object is listed in the table for “Email Information”.
     * @var object
     */
    public $EmailInformation;
    
    /**
     * EU Quarterly Report On / Off
     * @var Boolean true/false
     */
    public $EUQuarterlyReport;
    
    /**
     * External invoice reference 1.
     * @var string, 80 characters, searchable
     */
    public $ExternalInvoiceReference1;
    
    /**
     * External invoice reference 2.
     * @var string, 80 characters, searchable
     */
    public $ExternalInvoiceReference;
    
    /**
     * Freight cost of the invoice.
     * @var float, 12 digits (incl. decimals)
     */
    public $Freight;
    
    /**
     * VAT of the freight cost.
     * @var float, read-only
     */
    private $FreightVAT;
    
    /**
     * Gross value of the invoice
     * @var float, read-only
     */
    private $Gross;
    
    /**
     * If there is any row of the invoice marked “house work”.
     * @var boolean, read-only
     */
    private $HouseWork;
    
    /**
     * Invoice date. Must be a valid date according to our date format.
     * @var date
     */
    public $InvoiceDate;
    
    /**
     * Start date of the invoice period, only applicable for contract invoices.
     * @var date, read-only
     */
    private $InvoicePeriodStart;
    
    /**
     * End date of the invoice period, only applicable for contract invoices.
     * @var date, read-only
     */
    private $InvoicePeriodEnd;
    
    /**
     * The properties for the object in this array is listed in the table for “Invoice Rows”.
     * @var array
     */
    public $InvoiceRows;
    
    /**
     * The type of invoice.
     * Can be INVOICE AGREEMENTINVOICE INTRESTINVOICE SUMMARYINVOICE or CASHINVOICE.
     * @var string
     */
    public $InvoiceType = 'INVOICE';
    
    /**
     * Language code. Can be SV or EN.
     * @var string
     */
    public $Language = 'SV';
    
    /**
     * Date of last reminder.
     * @var date, read-only
     */
    private $LastRemindDate;
    
    /**
     * Net amount
     * @var float, read-only
     */
    private $Net;
    
    /**
     * If the invoice is set as not completed.
     * @var boolean, searchable
     */
    public $NotCompleted;
    
    /**
     * If the invoice is managed by NoxFinans
     * @var boolean, read-only
     */
    private $NoxFinans;
    
    /**
     * OCR number of the invoice.
     * @var string, searchable, sortable
     */
    public $OCR;
    
    /**
     * Reference to the offer, if one exists.
     * @var integer, read-only
     */
    private $OfferReference;
    
    /**
     * Reference to the order, if one exists.
     * @var integer, read-only
     */
    private $OrderReference;
    
    /**
     * Organisation number of the customer for the invoice.
     * @var string, read-only
     */
    private $OrganisationNumber;
    
    /**
     * Our reference.
     * @var string, 50 characters, searchable
     */
    public $OurReference;
    
    /**
     * Phone number 1 of the customer for the invoice.
     * @var string, 1024 characters
     */
    public $Phone1;
    
    /**
     * Phone number 2 of the customer for the invoice.
     * @var string, 1024 characters
     */
    public $Phone2;
    
    /**
     * Code of the price list. The code must be of an existing price list.
     * @var string
     */
    public $PriceList;
    
    /**
     * Print template of the invoice. Must be an existing print template.
     * @var string
     */
    public $PrintTemplate;
    
    /**
     * Code of the project. The code must be of an existing project.
     * @var string, searchable
     */
    public $Project;
    
    /**
     * Remarks of the invoice. This is the invoice text shown on the invoice.
     * @var string, 1024 characters
     */
    public $Remarks;
    
    /**
     * Number of reminders sent to the customer.
     * @var integer, read-only
     */
    private $Reminders;
    
    /**
     * Round off amount for the invoice.
     * @var float, read-only
     */
    private $RoundOff;
    
    /**
     * If the document is printed or sent in any way.
     * @var boolean, searchable, read-only
     */
    private $Sent;
    
    /**
     * The amount of tax reduction.
     * @var integer, read-only
     */
    private $TaxReduction;
    
    /**
     * Code of the terms of delivery.
     * The code must be of an existing terms of delivery.
     * @var string
     */
    public $TermsOfDelivery;
    
    /**
     * Code of the terms of payment.
     * The code must be of an existing terms of payment.
     * @var string
     */
    public $TermsOfPayment;
    
    /**
     * The total amount of the invoice.
     * @var float, sortable, read-only
     */
    private $Total;
    
    /**
     * The total VAT amount of the invoice.
     * @var float, read-only
     */
    private $TotalVAT;
    
    /**
     * If the price of the invoice is including VAT.
     * @var boolean
     */
    public $VATIncluded;
    
    /**
     * Voucher number for the invoice.
     * This is created when the invoice is bookkept.
     * @var integer, read-only
     */
    private $VoucherNumber;
    
    /**
     * Voucher series for the invoice.
     * This is created when the invoice is bookkept.
     * @var string, read-only
     */
    private $VoucherSeries;
    
    /**
     * Voucher year for the invoice.
     * This is created when the invoice is bookkept.
     * @var integer, read-only
     */
    private $VoucherYear;
    
    /**
     * Code of the way of delivery.
     * The code must be of an existing way of delivery.
     * @var string
     */
    public $WayOfDelivery;
    
    /**
     * Your order number.
     * @var string, 30 characters
     */
    public $YourOrderNumber;
    
    /**
     * Your reference.
     * @var string, 50 characters, searchable
     */
    public $YourReference;
    
    /**
     * Zip code of the invoice.
     * @var string, 1024 characters
     */
    public $ZipCode;

    public function __construct1(array $data) {
		parent::__construct1($data);
		if(is_array($this->InvoiceRows) && !empty($this->InvoiceRows)){
			$invoiceRows = [];
			foreach($this->InvoiceRows as $row){
				$invoiceRows[] = new InvoiceRow($row);
			}
			$this->InvoiceRows = $invoiceRows;
		}
		$this->EDIInformation = new EDIInformation($this->EDIInformation);
		$this->EmailInformation = new EmailInformation($this->EmailInformation);
	}
}
