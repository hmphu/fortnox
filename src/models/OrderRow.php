<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 16:58:26
 */

namespace hmphu\fortnox\models;

/**
 * Class OrderRow
 * @package hmphu\fortnox\models
 */
class OrderRow extends BaseModel
{
    
    /**
     * Account number (If empty Fortnox will use settings from the article), 4 digits
     * @var integer
     */
    public $AccountNumber;
    
    /**
     * Article number
     * @var string
     */
    public $ArticleNumber;
    
    /**
     * Contribution Percent
     * @var float
     */
    private $ContributionPercent;
    
    /**
     * Contribution Value
     * @var float
     */
    private $ContributionValue;
    
    /**
     * Cost center code
     * @var string
     */
    public $CostCenter;
    
    /**
     * Delivered quantity
     * @var float
     */
    public $DeliveredQuantity;
    
    /**
     * Description (If empty Fortnox will use description from the article)
     * @var string
     */
    public $Description;
    
    /**
     * Discount amount
     * @var float
     */
    public $Discount;
    
    /**
     * Type of discount.
     * Can be: AMOUNT / PERCENT
     * @var string
     */
    public $DiscountType;
    
    /**
     * If the row is housework (If empty Fortnox will use settings from the article)
     * @var boolean
     */
    public $HouseWork;
    
    /**
     * Hours to be reported if the quantity of the row should not be used as hours, max 5 digits
     * @var integer
     */
    public $HouseWorkHoursToReport;
    
    /**
     * The type of house work CONSTRUCTION, ELECTRICITY, GLASSMETALWORK, GROUNDDRAINAGEWORK, MASONRY, PAINTINGWALLPAPERING, HVAC,
     * CLEANING, TEXTILECLOTHING, COOKING, SNOWPLOWING, GARDENING, BABYSITTING, OTHERCARE, TUTORING, OTHERCOSTS, or empty.
     * @var string
     */
    public $HouseWorkType = 'CONSTRUCTION';
    
    /**
     * Ordered quantity
     * @var float
     */
    public $OrderedQuantity;
    
    /**
     * Unit price (If empty Fortnox will use the price from the customers price list)
     * @var float
     */
    public $Price;
    
    /**
     * Project code
     * @var integer
     */
    public $Project;
    
    /**
     * Total row amount
     * @var float
     */
    private $Total;
    
    /**
     * Code of unit
     * @var string
     */
    public $Unit;
    
    /**
     * VAT percent code (If empty Fortnox will use settings from the article)
     * @var float
     */
    public $VAT;
}
