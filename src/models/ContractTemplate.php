<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 18:18:21
 */

namespace hmphu\fortnox\models;

/**
 * Class ContractTemplate
 * @package hmphu\fortnox\models
 */
class ContractTemplate extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Administration fee
     * @var float
     */
    public $AdministrationFee;
    
    /**
     * Length of the contract 0 if Continuous is set to true
     * @var integer
     */
    public $ContractLength;
    
    /**
     * Freight
     * @var float
     */
    public $Freight;
    
    /**
     * Invoice interval
     * @var integer
     */
    public $InvoiceInterval;
    
    /**
     * -
     */
    private $InvoiceRows;
    
    /**
     * If the contract is continuous
     * @var boolean
     */
    public $Continuous;
    
    /**
     * Our reference
     * @var string
     */
    public $OurReference;
    
    /**
     * Print template code
     * @var string
     */
    public $PrintTemplate;
    
    /**
     * Remarks
     * @var string
     */
    public $Remarks;
    
    /**
     * Name of the template
     * @var string
     */
    public $TemplateName;
    
    /**
     * Number of the template
     * @var string
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
     * Way of delivery code
     * @var string
     */
    public $WayOfDelivery;
}
