<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 10:25:55
 */

namespace hmphu\fortnox\models;

/**
 * Class Order
 * @package hmphu\fortnox\models
 */
class Order extends BaseModel
{
    
    /**
     * Direct url to the record and URL to Taxreduction for the order (URL to Taxreduction shows even if – Taxreduction are connected to order)
     * @var string
     */
    private $Url;
    
    /**
     * Administration fee
     * @var float
     */
    public $AdministrationFee;
    
    /**
     * VAT of the administration fee
     * @var float
     */
    private $AdministrationFeeVAT;
    
    /**
     * Address 1
     * @var string
     */
    public $Address1;
    
    /**
     * Address 2
     * @var string
     */
    public $Address2;
    
    /**
     * The amount that Taxreduction is based on
     * @var float
     */
    private $BasisTaxReduction;
    
    /**
     * If Order is cancelled
     * @var boolean
     */
    private $Cancelled;
    
    /**
     * City
     * @var string
     */
    public $City;
    
    /**
     * Comments
     * @var string
     */
    public $Comments;
    
    /**
     * Contribution in Percent
     * @var float
     */
    private $ContributionPercent;
    
    /**
     * Contribution in amount
     * @var float
     */
    private $ContributionValue;
    
    /**
     * I remarks shall copies from order to invoice
     * @var boolean
     */
    public $CopyRemarks;
    
    /**
     * Country
     * @var string
     */
    public $Country;
    
    /**
     * Cost center
     * @var string
     */
    public $CostCenter;
    
    /**
     * Currency, 3 characters
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
     * Delivery address 1
     * @var string
     */
    public $DeliveryAddress1;
    
    /**
     * Delivery address 2
     * @var string
     */
    public $DeliveryAddress2;
    
    /**
     * Delivery City
     * @var string
     */
    public $DeliveryCity;
    
    /**
     * Delivery Country
     * @var string
     */
    public $DeliveryCountry;
    
    /**
     * Delivery date
     * @var date
     */
    public $DeliveryDate;
    
    /**
     * Delivery name
     * @var string
     */
    public $DeliveryName;
    
    /**
     * Delivery zip code
     * @var string
     */
    public $DeliveryZipCode;
    
    /**
     * Document number
     * @var integer
     */
    public $DocumentNumber;
    
    /**
     * @var object
     */
    private $EmailInformation;
    
    /**
     * External invoice reference 1
     * @var string
     */
    public $ExternalInvoiceReference1;
    
    /**
     * External invoice reference 2
     * @var string
     */
    public $ExternalInvoiceReference2;
    
    /**
     * Freight
     * @var float
     */
    public $Freight;
    
    /**
     * VAT of the freight
     * @var float
     */
    private $FreightVAT;
    
    /**
     * Gross value of order
     * @var float
     */
    private $Gross;
    
    /**
     * If Order is marked as housework
     * @var boolean
     */
    private $HouseWork;
    
    /**
     * Reference if an invoice is created from order
     * @var integer
     */
    private $InvoiceReference;
    
    /**
     * Net amount
     * @var float
     */
    private $Net;
    
    /**
     * If order is set to complete
     * @var boolean
     */
    public $NotCompleted;
    
    /**
     * Date of order
     * @var date
     */
    public $OrderDate;
    
    /**
     * Reference to offer number
     * @var integer
     */
    private $OfferReference;
    
    /**
     * @var object
     */
    private $OrderRows;
    
    /**
     * Organization number
     * @var string
     */
    private $OrganisationNumber;
    
    /**
     * Our reference
     * @var string
     */
    public $OurReference;
    
    /**
     * Phone 1
     * @var string
     */
    public $Phone1;
    
    /**
     * Phone 2
     * @var string
     */
    public $Phone2;
    
    /**
     * Price list code
     * @var string
     */
    public $PriceList;
    
    /**
     * Print document template
     * @var string
     */
    public $PrintTemplate;
    
    /**
     * Project code
     * @var integer
     */
    public $Project;
    
    /**
     * Remarks on order
     * @var string
     */
    public $Remarks;
    
    /**
     * Roundof amount
     * @var float
     */
    private $RoundOff;
    
    /**
     * @var object
     */
    private $Rows;
    
    /**
     * If document is printed or e-mailed
     * @var boolean
     */
    private $Sent;
    
    /**
     * Amount of the Taxreduction
     * @var float
     */
    private $TaxReduction;
    
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
     * Total amount
     * @var float
     */
    private $Total;
    
    /**
     * Total vat amount
     * @var float
     */
    private $TotalVat;
    
    /**
     * If order row price exclude or include vat
     * @var boolean
     */
    public $VATIncluded;
    
    /**
     * Code of delivery
     * @var string
     */
    public $WayOfDelivery;
    
    /**
     * Customer reference
     * @var string
     */
    public $YourReference;
    
    /**
     * Customer order number
     * @var string
     */
    public $YourOrderNumber;
    
    /**
     * Order zip code
     * @var string
     */
    public $ZipCode;
}
