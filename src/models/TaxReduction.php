<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:14:56
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 11:11:16
 */

namespace hmphu\fortnox\models;

/**
 * Class TaxReduction
 * @package hmphu\fortnox\models
 */
class TaxReduction extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Apporoved amount
     * @var float
     */
    private $ApprovedAmount;
    
    /**
     * Asked amount
     * @var float
     */
    public $AskedAmount;
    
    /**
     * Billed amount
     * @var float
     */
    private $BilledAmount;
    
    /**
     * Name of the customer
     * @var string
     */
    public $CustomerName;
    
    /**
     * Id
     * @var string
     */
    private $Id;
    
    /**
     * Property designation
     * @var string
     */
    public $PropertyDesignation;
    
    /**
     * Document type. Can be; OFFER / ORDER / INVOICE
     * @var string
     */
    public $ReferenceDocumentType;
    
    /**
     * Reference number
     * @var integer
     */
    public $ReferenceNumber;
    
    /**
     * Is request sent
     * @var boolean
     */
    private $RequestSent;
    
    /**
     *
     * @var string
     */
    public $ResidenceAssociationOrganisationNumber;
    
    /**
     * Social security number
     * @var string
     */
    public $SocialSecurityNumber;
    
    /**
     * Type of reduction. Can be: ROT / RUT
     * @var string
     */
    public $TypeOfReduction;
    
    /**
     * Voucher number
     * @var string
     */
    private $VoucherNumber;
    
    /**
     * Voucher series
     * @var string
     */
    private $VoucherSeries;
    
    /**
     * Voucher year
     * @var string
     */
    private $VoucherYear;
}
