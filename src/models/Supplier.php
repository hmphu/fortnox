<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:14:56
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 11:09:07
 */

namespace hmphu\fortnox\models;

/**
 * Class Supplier
 * @package hmphu\fortnox\models
 */
class Supplier extends BaseModel
{
    
    /**
     * If active
     * @var boolean
     */
    public $Active;
    
    /**
     * First address field
     * @var string
     */
    public $Address1;
    
    /**
     * Second address field
     * @var string
     */
    public $Address2;
    
    /**
     * Bank of the supplier
     * @var string
     */
    public $Bank;
    
    /**
     * Bank account number of the supplier
     * @var integer
     */
    public $BankAccountNumber;
    
    /**
     * BG number for the supplier, from 0-9
     * @var string
     */
    public $BG;
    
    /**
     * Bank Identifier Code
     * @var string
     */
    public $BIC;
    
    /**
     * Branch Code(SNI)
     * @var string
     */
    public $BranchCode;
    
    /**
     * City of the supplier address
     * @var string
     */
    public $City;
    
    /**
     * Clearing number
     * @var integer
     */
    public $ClearingNumber;
    
    /**
     * Comments
     * @var string
     */
    public $Comments;
    
    /**
     * Cost center code
     * @var string
     */
    public $CostCenter;
    
    /**
     * Country of the supplier address
     * @var string
     */
    public $Country;
    
    /**
     * Country code of the supplier address, 2 chars
     * @var string
     */
    public $CountryCode;
    
    /**
     * Currency of the supplier, 3 chars
     * @var string
     */
    public $Currency;
    
    /**
     * Payment file disabled for the supplier
     * @var boolean
     */
    public $DisablePaymentFile;
    
    /**
     * Email of the supplier
     * @var string
     */
    public $Email;
    
    /**
     * Fax number
     * @var string
     */
    public $Fax;
    
    /**
     * International Bank Account Number
     * @var string
     */
    public $IBAN;
    
    /**
     * Name of the supplier
     * @var string
     */
    public $Name;
    
    /**
     * Organisation number of the supplier, from 0-9
     * @var string
     */
    public $OrganisationNumber;
    
    /**
     * Our reference for the supplier
     * @var string
     */
    public $OurReference;
    
    /**
     * Our customer number for the supplier
     * @var string
     */
    public $OurCustomerNumber;
    
    /**
     * PG number for the supplier
     * @var string
     */
    public $PG;
    
    /**
     * Phone number for the supplier, allows: 0-9, +, (, )
     * @var string
     */
    public $Phone1;
    
    /**
     * Phone number for the supplier, allows: 0-9, +, (, )
     * @var string
     */
    public $Phone2;
    
    /**
     * Pre defined account of the supplier, 4 chars
     * @var string
     */
    public $PreDefinedAccount;
    
    /**
     * Project number
     * @var integer
     */
    public $Project;
    
    /**
     * The supplier number. If not provided, the next supplier number in the series will be used.
     * @var string
     */
    public $SupplierNumber;
    
    /**
     * The suppliers terms of payment
     * @var string
     */
    public $TermsOfPayment;
    
    /**
     * VAT Number
     * @var string
     */
    public $VATNumber;
    
    /**
     * VAT Type. Can be: REVERSE / NORMAL / EUINTERNAL
     * @var string
     */
    public $VATType;
    
    /**
     * Visiting address
     * @var string
     */
    public $VisitingAddress;
    
    /**
     * Visiting city
     * @var string
     */
    public $VisitingCity;
    
    /**
     * Visiting country
     * @var string
     */
    public $VisitingCountry;
    
    /**
     * Visiting country code
     * @var string
     */
    public $VisitingCountryCode;
    
    /**
     * Visiting zip code
     * @var string
     */
    public $VisitingZipCode;
    
    /**
     * Work place(CFAR)
     * @var string
     */
    public $WorkPlace;
    
    /**
     * The suppliers website
     * @var string
     */
    public $WWW;
    
    /**
     * Your reference for the supplier
     * @var string
     */
    public $YourReference;
    
    /**
     * The zip code of the supplier address
     * @var string
     */
    public $ZipCode;
}
