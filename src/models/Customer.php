<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-12 15:29:11
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 17:52:53
 */

namespace hmphu\fortnox\models;

/**
 * Class FortnoxConfig
 * @package hmphu\fortnox
 */
class Customer extends BaseModel
{
    /**
     * Direct URL to the record.
     * @var	string, read-only
     */
    private $Url;
	
	/**
	 * Address 1 of the customer.
	 * @var	string, 1024 characters
	 */
	public $Address1;
	
	/**
	 * Address 2 of the customer.
	 * @var	string, 1024 characters
	 */
	public $Address2;
	
	/**
	 * City of the customer.
	 * @var	string, 1024 characters, searchable
	 */
	public $City;
	
	/**
	 * Country name for the customer.
	 * @var	string, read-only
	 */
	private $Country;
	
	/**
	 * Comments of the customer.
	 * @var	string, 1024 characters
	 */
	public $Comments;
	
	/**
	 * Code of the currency for the customer.
	 * This will be used as the predefined currency for documents for the customer. 
	 * The code must be of an existing currency.
	 * @var	string, 3 characters
	 */
	public $Currency;
	
	/**
	 * Code of the cost center for the customer. 
	 * The code must be of a an existing currency.
	 * @var	string
	 */
	public $CostCenter;
	
	/**
	 * Code of the country for the customer. 
	 * The code must be of an existing country according to ISO 3166-1 Alpha-2.
	 * @var	string, 2 characters
	 */
	public $CountryCode;
	
	/**
	 * Customer number of the customer. 
	 * If no customer number is provided, the next number in the series will be used. 
	 * Only alpha numeric characters, with the addition of - + / and _, are allowed.
	 * @var	string, 1024 characters, searchable, sortable
	 */
	public $CustomerNumber;
	
	/**
	 * The properties for this object is listed in the table for “Default Delivery Types”.
	 * @var	object
	 */
	public $DefaultDeliveryTypes;
	
	/**
	 * The properties for this object is listed in the table for “Default Templates”.
	 * @var	object
	 */
	public $DefaultTemplates;
	
	/**
	 * Delivery address 1 for the customer.
	 * @var	string, 1024 characters
	 */
	public $DeliveryAddress1;
	
	/**
	 * DeliveryAddress 2 for the customer.
	 * @var	string, 1024 characters
	 */
	public $DeliveryAddress2;
	
	/**
	 * Delivery city for the customer.
	 * @var	string, 1024 characters
	 */
	public $DeliveryCity;
	
	/**
	 * Delivery country for the customer.
	 * @var	string, 1024 characters, read-only
	 */
	private $DeliveryCountry;
	
	/**
	 * Code of the delivery country for the customer. 
	 * The code must be of an existing country according to ISO 3166-1 Alpha-2.
	 * @var	string, 2 characters
	 */
	public $DeliveryCountryCode;
	
	/**
	 * Delivery fax number of the customer.
	 * @var	string, 1024 characters
	 */
	public $DeliveryFax;
	
	/**
	 * Delivery name for the customer.
	 * @var	string, 1024 characters
	 */
	public $DeliveryName;
	
	/**
	 * Delivery phone number 1 for the customer.
	 * @var	string, 1024 characters
	 */
	public $DeliveryPhone1;
	
	/**
	 * Delivery phone number 2 for the customer.
	 * @var	string, 1024 characters
	 */
	public $DeliveryPhone2;
	
	/**
	 * Delivery zip code for the customer.
	 * @var	string, 10 characters
	 */
	public $DeliveryZipCode;
	
	/**
	 * Email address for the customer. 
	 * This must be a valid email address.
	 * @var	string, 1024 characters, searchable
	 */
	public $Email;
	
	/**
	 * Specific email address used for invoices sent to the customer. 
	 * This must be a valid email address.
	 * @var	string, 1024 characters
	 */
	public $EmailInvoice;
	
	/**
	 * Specific blind carbon copy email address used for invoices sent to the customer. 
	 * This must be a valid email address.
	 * @var	string, 1024 characters
	 */
	public $EmailInvoiceBCC;
	
	/**
	 * Specific carbon copy email address used for invoices sent to the customer. 
	 * This must be a valid email address.
	 * @var	string, 1024 characters
	 */
	public $EmailInvoiceCC;
	
	/**
	 * Specific email address used for offers sent to the customer. 
	 * This must be a valid email address.
	 * @var	string, 1024 characters
	 */
	public $EmailOffer;
	
	/**
	 * Specific blind carbon copy email address used for offers sent to the customer. 
	 * This must be a valid email address.
	 * @var	string, 1024 characters
	 */
	public $EmailOfferBCC;
	
	/**
	 * Specific carbon copy email address used for offers sent to the customer. 
	 * This must be a valid email address.
	 * @var	string, 1024 characters
	 */
	public $EmailOfferCC;
	
	/**
	 * Specific email address used for orders sent to the customer. 
	 * This must be a valid email address.
	 * @var	string, 1024 characters
	 */
	public $EmailOrder;
	
	/**
	 * Specific blind carbon copy email address used for orders sent to the customer. 
	 * This must be a valid email address.
	 * @var	string, 1024 characters
	 */
	public $EmailOrderBCC;
	
	/**
	 * Specific carbon copy email address used for orders sent to the customer. 
	 * This must be a valid email address.
	 * @var	string, 1024 characters
	 */
	public $EmailOrderCC;
	
	/**
	 * Fax number for the customer.
	 * @var	string, 1024 characters
	 */
	public $Fax;
	
	/**
	 * Predefined invoice administration fee for the customer.
	 * @var	float, 11 digits
	 */
	public $InvoiceAdministrationFee;
	
	/**
	 * Predefined invoice discount for the customer.
	 * @var	float, 11 digits
	 */
	public $InvoiceDiscount;
	
	/**
	 * Predefined invoice freight fee for the customer.
	 * @var	float, 11 digits
	 */
	public $InvoiceFreight;
	
	/**
	 * Predefined invoice remark for the customer.
	 * @var	string, 1024 characters
	 */
	public $InvoiceRemark;
	
	/**
	 * Name of the customer.
	 * @var	string, 1024 characters, searchable, sortable, required
	 */
	public $Name;
	
	/**
	 * Organisation number of the customer. 
	 * It needs to be a valid organisation numer.
	 * @var	string, 30 characters, searchable
	 */
	public $OrganisationNumber;
	
	/**
	 * Our reference of the customer.
	 * @var	string, 50 characters
	 */
	public $OurReference;
	
	/**
	 * Phone number 1 of the customer.
	 * @var	string, 1024 characters, searchable
	 */
	public $Phone1;
	
	/**
	 * Phone number 2 of the customer.
	 * @var	string, 1024 characters
	 */
	public $Phone2;
	
	/**
	 * Code of the price list for the customer.
	 * The code must be of a an existing price list.
	 * @var	string
	 */
	public $PriceList;
	
	/**
	 * Number of the project for the customer.
	 * The number must be of a an existing project.
	 * @var	integer
	 */
	public $Project;
	
	/**
	 * Predefined sales account of the customer.
	 * @var	integer, 4 digits
	 */
	public $SalesAccount;
	
	/**
	 * If prices should be displayed with VAT included.
	 * @var	boolean
	 */
	public $ShowPriceVATIncluded;
	
	/**
	 * Code of the terms of delivery for the customer. 
	 * The code must be of a an existing terms of delivery.
	 * @var	string
	 */
	public $TermsOfDelivery;
	
	/**
	 * Code of the terms of payment for the customer. 
	 * The code must be of a an existing terms of payment.
	 * @var	string
	 */
	public $TermsOfPayment;
	
	/**
	 * Type of the customer. 
	 * Can be PRIVATE or COMPANY.
	 * @var	string
	 */
	public $Type;
	
	/**
	 * VAT number for the customer.
	 * @var	string
	 */
	public $VATNumber;
	
	/**
	 * VAT type of the customer. 
	 * Can be SEVAT SEREVERSEDVAT EUREVERSEDVAT EUVAT or EXPORT.
	 * @var	string
	 */
	public $VATType;
	
	/**
	 * Visiting address of the customer.
	 * @var	string, 128 characters
	 */
	public $VisitingAddress;
	
	/**
	 * Visiting city of the customer.
	 * @var	string, 128 characters
	 */
	public $VisitingCity;
	
	/**
	 * Visiting country of the customer.
	 * @var	string, read-only
	 */
	private $VisitingCountry;
	
	/**
	 * Code of the visiting country for the customer. 
	 * The code must be of an existing country according to ISO 3166-1 Alpha-2.
	 * @var	string, 2 characters
	 */
	public $VisitingCountryCode;
	
	/**
	 * Visiting zip code of the customer.
	 * @var	string, 10 characters
	 */
	public $VisitingZipCode;
	
	/**
	 * Website of the customer.
	 * @var	string, 128 characters
	 */
	public $WWW;
	
	/**
	 * Code of the way of delivery for the customer. 
	 * The code must be of a an existing way of delivery.
	 * @var	string
	 */
	public $WayOfDelivery;
	
	/**
	 * Your reference of the customer.
	 * @var	string, 50 characters
	 */
	public $YourReference;
	
	/**
	 * Zip code of the customers.
	 * @var	string, 10 characters, searchable
	 */
	public $ZipCode;
}
