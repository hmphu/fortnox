<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 16:57:36
 */

namespace hmphu\fortnox\models;

/**
 * Class InvoiceRow
 * @package hmphu\fortnox\models
 */
class InvoiceRow extends BaseModel
{
    
    /**
     * Account number (If empty Fortnox will use setting on article)
     * @var number
     */
    private $AccountNumber;
    
    /**
     * Article number
     * @var number
     */
    private $ArticleNumber;
    
    /**
     * Contribution Percent
     * @var number
     */
    private $ContributionPercent;
    
    /**
     * Contribution Value
     * @var number
     */
    private $ContributionValue;
    
    /**
     * Code of the cost center for the row. The code must be of an existing cost center.
     * @var string
     */
    public $CostCenter;
    
    /**
     * Delivered quantity
     * @var number
     */
    public $DeliveredQuantity;
    
    /**
     * Description
     * @var string
     */
    public $Description;
    
    /**
     * Discount amount
     * @var float, 12 digits (for amount) / 5 digits (for percent)
     */
    public $Discount;
    
    /**
     * The type of discount used for the row
     * Can be AMOUNT / PERCENT
     * @var number
     */
    public $DiscountType = 'AMOUNT';
    
    /**
     * @var boolean
     */
    public $HouseWork;
    
    /**
     * Hours to be reported if the quantity of the row should not be used as hours.
     * @var integer, 5 digits
     */
    public $HouseWorkHoursToReport;
    
    /**
     * The type of house work.
     * Can be CONSTRUCTION, ELECTRICITY, GLASSMETALWORK, GROUNDDRAINAGEWORK, MASONRY, PAINTINGWALLPAPERING,
     * HVAC, CLEANING, TEXTILECLOTHING, COOKING, SNOWPLOWING, GARDENING, BABYSITTING, OTHERCARE,
     * TUTORING, OTHERCOSTS or empty.
     * @var string
     */
    public $HouseWorkType = 'CONSTRUCTION';
    
    /**
     * Unit price
     * @var number
     */
    public $Price;
    
    /**
     * Price per unit excluding VAT (regardless of value of VATIncluded flag)
     * @var float, read-only
     */
    private $PriceExcludingVAT;
    
    /**
     * Code of the project for the row. The code must be of an existing project.
     * @var number
     */
    public $Project;
    
    /**
     * Total amount for the row.
     * @var number
     */
    private $Total;
    
    /**
     * Total amount for the row excluding VAT (regardless of value of VATIncluded flag)
     * @var float, read-only
     */
    private $TotalExcludingVAT;
    
    /**
     * Code of unit
     * @var string
     */
    public $Unit;
    
    /**
     * Vat percent code
     * @var number
     */
    public $VAT;
}
