<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 18:11:40
 */

namespace hmphu\fortnox\models;

/**
 * Class CompanySettings
 * @package hmphu\fortnox\models
 */
class CompanySettings extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Address for the company
     * @var string
     */
    private $Address;
    
    /**
     * Bankgiro
     * @var string
     */
    private $BG;
    
    /**
     * BIC
     * @var string
     */
    private $BIC;
    
    /**
     * Branch code (SNI)
     * @var string
     */
    private $BranchCode;
    
    /**
     * City
     * @var string
     */
    private $City;
    
    /**
     * Contact person – First name
     * @var string
     */
    private $ContactFirstName;
    
    /**
     * Contact person – Last name
     * @var string
     */
    private $ContactLastName;
    
    /**
     * Country
     * @var string
     */
    private $Country;
    
    /**
     * CountryCode
     * @var string
     */
    private $CountryCode;
    
    /**
     * Database number
     * @var string
     */
    private $DatabaseNumber;
    
    /**
     * Domicile
     * @var string
     */
    private $Domicile;
    
    /**
     * Email
     * @var string
     */
    private $Email;
    
    /**
     * Fax
     * @var string
     */
    private $Fax;
    
    /**
     * IBAN
     * @var string
     */
    private $IBAN;
    
    /**
     * Company name
     * @var string
     */
    private $Name;
    
    /**
     * Organisation number
     * @var string
     */
    private $OrganisationNumber;
    
    /**
     * Plusgiro
     * @var string
     */
    private $PG;
    
    /**
     * Phone
     * @var string
     */
    private $Phone1;
    
    /**
     * Phone
     * @var string
     */
    private $Phone2;
    
    /**
     * Tax enabled
     * @var boolean
     */
    private $TaxEnabled;
    
    /**
     * VAT number
     * @var string
     */
    private $VATNumber;
    
    /**
     * Visit address
     * @var string
     */
    private $VisitAddress;
    
    /**
     * Visit city
     * @var string
     */
    private $VisitCity;
    
    /**
     * Visit country
     * @var string
     */
    private $VisitCountry;
    
    /**
     * Visit country code
     * @var string
     */
    private $VisitCountryCode;
    
    /**
     * Visit name
     * @var string
     */
    private $VisitName;
    
    /**
     * Visit zip code
     * @var string
     */
    private $VisitZipCode;
    
    /**
     * Website
     * @var string
     */
    private $WWW;
    
    /**
     * Zip code
     * @var string
     */
    private $ZipCode;
}
