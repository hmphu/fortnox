<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 16:53:08
 */

namespace hmphu\fortnox\models;

/**
 * Class Contract
 * @package hmphu\fortnox\models
 */
class Contract extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Direct url to the tax reduction list for the record
     * @var string
     */
    private $UrlTaxReductionList;
    
    /**
     * If the contract is active
     * @var boolean
     */
    public $Active;
    
    /**
     * Administration Fee
     * @var float
     */
    public $AdministrationFee;
    
    /**
     * Comments
     * @var string
     */
    public $Comments;
    
    /**
     * If the contract is continuous
     * @var boolean
     */
    public $Continuous;
    
    /**
     * Contract date
     * @var date
     */
    public $ContractDate;
    
    /**
     * Contract length
     * @var integer
     */
    public $ContractLength;
    
    /**
     * Contribution percent
     * @var float
     */
    private $ContributionPercent;
    
    /**
     * Contribution value
     * @var float
     */
    private $ContributionValue;
    
    /**
     * Cost center code
     * @var string
     */
    public $CostCenter;
    
    /**
     * Currency
     * @var string
     */
    public $Currency;
    
    /**
     * Customer name
     * @var string
     */
    public $CustomerName;
    
    /**
     * Customer number
     * @var string
     */
    public $CustomerNumber;
    
    /**
     * Document number
     * @var integer
     */
    public $DocumentNumber;
    
    /**
     *
     */
    private $EmailInformation;
    
    /**
     * External invoice reference
     * @var string
     */
    public $ExternalInvoiceReference1;
    
    /**
     * External invoice reference
     * @var string
     */
    public $ExternalInvoiceReference2;
    
    /**
     * Freight
     * @var float
     */
    public $Freight;
    
    /**
     * Gross
     * @var float
     */
    private $Gross;
    
    /**
     * If house work
     * @var boolean
     */
    private $HouseWork;
    
    /**
     * Invoice discount
     * @var float
     */
    public $InvoiceDiscount;
    
    /**
     * Invoice interval
     * @var integer
     */
    public $InvoiceInterval;
    
    /**
     *
     */
    private $InvoiceRows;
    
    /**
     * Invoices remaining
     * @var integer
     */
    private $InvoicesRemaining;
    
    /**
     * Language: SV / EN
     * @var string
     */
    public $Language = 'EN';
    
    /**
     * Last invoice date
     * @var date
     */
    private $LastInvoiceDate;
    
    /**
     * Net
     * @var float
     */
    private $Net;
    
    /**
     * Our reference
     * @var string
     */
    public $OurReference;
    
    /**
     * End of the period
     * @var date
     */
    public $PeriodEnd;
    
    /**
     * Start of the period
     * @var date
     */
    public $PeriodStart;
    
    /**
     * Price list
     * @var string
     */
    public $PriceList;
    
    /**
     * Project number
     * @var integer
     */
    public $Project;
    
    /**
     * Remarks
     * @var string
     */
    public $Remarks;
    
    /**
     * Tax reduction
     * @var float
     */
    private $TaxReduction;
    
    /**
     * Template name
     * @var string
     */
    private $TemplateName;
    
    /**
     * Template number
     * @var integer
     */
    public $TemplateNumber;
    
    /**
     * Terms of delivery code
     * @var string
     */
    public $TermsOfDelivery;
    
    /**
     * Terms of payment code
     * @var string
     */
    public $TermsOfPayment;
    
    /**
     * Total
     * @var float
     */
    private $Total;
    
    /**
     * Total to pay
     * @var float
     */
    private $TotalToPay;
    
    /**
     * Total VAT
     * @var float
     */
    private $TotalVAT;
    
    /**
     * If VAT is included
     * @var boolean
     */
    public $VATIncluded;
    
    /**
     * Way of delivery code
     * @var string
     */
    public $WayOfDelivery;
    
    /**
     * Your order number
     * @var string
     */
    public $YourOrderNumber;
}