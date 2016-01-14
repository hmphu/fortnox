<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 18:01:01
 */

namespace hmphu\fortnox\models;

/**
 * Class Offer
 * @package hmphu\fortnox\models
 */
class Offer extends BaseModel
{
    
    /**
     * Direct url to the record and URL to Taxreduction for the offer (URL to Taxreduction shows even if – Taxreduction is connected to offer)
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
     * If the offer is cancelled
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
     * Remarks will be copied from offer to order
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
     * Delivery zipcode
     * @var string
     */
    public $DeliveryZipCode;
    
    /**
     * Document Number
     * @var integer
     */
    public $DocumentNumber;
    
    /**
     * @var object
     */
    private $EmailInformation;
    
    /**
     * Expire date
     * @var date
     */
    public $ExpireDate;
    
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
     * Gross value of the offer
     * @var float
     */
    private $Gross;
    
    /**
     * If offer is marked with housework
     * @var boolean
     */
    private $HouseWork;
    
    /**
     * Reference if an order is created from offer
     * @var integer
     */
    private $OrderReference;
    
    /**
     * Net amount
     * @var float
     */
    private $Net;
    
    /**
     * If the offer is marked Completed (this mark stops the offer from being cancelled or that a user can create an order from the offer )
     * @var boolean
     */
    public $Completed;
    
    /**
     * Date of order
     * @var date
     */
    public $OfferDate;
    
    /**
     * Reference to order
     * @var integer
     */
    private $OrderReference;
    
    /**
     * Organisation number
     * @var string
     */
    public $OrganisationNumber;
    
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
     * Pricelist code
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
     * Remarks on offer
     * @var string
     */
    public $Remarks;
    
    /**
     * Round off amount
     * @var float
     */
    private $RoundOff;
    
    /**
     * @var object[]
     */
    private $OfferRows = [];
    
    /**
     * If document is printed or e-mailed to customer
     * @var boolean
     */
    private $Sent;
    
    /**
     * Amount of Taxreduction
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
     * If offer row price exclude or include vat
     * @var boolean
     */
    public $VatIncluded;
    
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
     * Zip code
     * @var string
     */
    public $ZipCode;

    public function __construct1(array $data) {
		parent::__construct1($data);
		$this->EmailInformation = new EmailInformation($this->EmailInformation);
		$offerRows = [];
		foreach($this->OfferRows as $row){
			$offerRows[] = new OfferRow($row);
		}
		$this->OfferRows = $offerRows;
	}
}