<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-12 15:29:11
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 10:05:36
 */

namespace hmphu\fortnox\models;

/**
 * Class FortnoxConfig
 * @package hmphu\fortnox
 */
class Customer extends BaseModel
{
    const TYPE_PRIVATE = 'PRIVATE';
    const TYPE_COMPANY = 'COMPANY';
    
    /**
     * Type of the customer. Can be PRIVATE or COMPANY.
     * @var string
     */
    public $Type;
    
    /**
     * Name of the customer (Required)
     * @var string
     */
    public $Name;
    
    /**
     * Our reference of the customer.
     * @var string
     */
    public $OurReference;
    
    /**
     * Address 1 of the customer
     * @var string
     */
    public $Address1;
    
    /**
     * Address 2 of the customer
     * @var string
     */
    public $Address2;
    
    /**
     * Zip code of the customers
     * @var string
     */
    public $ZipCode;
    
    /**
     * City of the customer
     * @var string
     */
    public $City;
    
    /**
     * Phone number 1 of the customer
     * @var string
     */
    public $Phone1;
    
    /**
     * Phone number 2 of the customer
     * @var string
     */
    public $Phone2;
    
    /**
     * Email address for the customer. This must be a valid email address.
     * @var email
     */
    public $Email;
    
    /**
     * Delivery address 1 for the customer.
     * @var string
     */
    public $DeliveryAddress1;
    
    /**
     * Delivery address 2 for the customer.
     * @var string
     */
    public $DeliveryAddress2;
    
    /**
     * Delivery zip code for the customer.
     * @var string
     */
    public $DeliveryZipCode;
    
    /**
     * Delivery city for the customer.
     * @var string
     */
    public $DeliveryCity;
    
    /**
     * Code of the price list for the customer. The code must be of a an existing price list.
     * @var string
     */
    public $PriceList;
    
    function __construct10($Name, $Email, $Type, $Address, $Phone, $City, $ZipCode, $DeliveryAddress, $DeliveryZipCode, $DeliveryCity) {
        if ($Type != static ::TYPE_PRIVATE && $Type != static ::TYPE_COMPANY) {
            throw new \Exception(sprintf("Type must be: '%s' or '%s'", static ::TYPE_PRIVATE, static ::TYPE_COMPANY));
        }
        $this->Name = $Name;
        $this->Email = $Email;
        $this->Type = $Type;
        $this->Address1 = $Address;
        $this->Phone1 = $Phone;
        $this->City = $City;
        $this->ZipCode = $ZipCode;
        $this->DeliveryAddress1 = $DeliveryAddress;
        $this->DeliveryZipCode = $DeliveryZipCode;
        $this->DeliveryCity = $DeliveryCity;
    }
}
