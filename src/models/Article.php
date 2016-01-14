<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 18:08:45
 */

namespace hmphu\fortnox\models;

/**
 * Class Article
 * @package hmphu\fortnox\models
 */
class Article extends BaseModel
{
    
    /**
     * Direct url to the record.
     * @var string, read-only
     */
    private $Url;
    
    /**
     * Article number.
     * If no article number is provided, the next number in the series will be used.
     * Only alpha numeric characters, with the addition of - + / and _, are allowed.
     * @var string, 50 characters, searchable, sortable
     */
    public $ArticleNumber;
    
    /**
     * If the article is bulky.
     * @var boolean
     */
    public $Bulky;
    
    /**
     * Account number for construction work (special VAT rules in Sweden). 
     * The number must be of an existing account.
     * @var integer, 4 digits
     */
    public $ConstructionAccount;
    
    /**
     * The depth of the article in millimeters.
     * @var integer, 8 digits
     */
    public $Depth;
    
    /**
     * The description of the article.
     * @var string, 200 characters, searchable, required
     */
    public $Description;
    
    /**
     * Disposable quantity of the article.
     * @var float, read-only, sortable
     */
    private $DisposableQuantity;
    
    /**
     * EAN bar code.
     * @var string, 30 characters, searchable
     */
    public $EAN;
    
    /**
     * Account number for the sales account to EU.
     * The number must be of an existing account.
     * @var integer, 4 digits
     */
    public $EUAccount;
    
    /**
     * Account number for the sales account to EU with VAT.
     * The number must be of an existing account.
     * @var integer, 4 digits
     */
    public $EUVATAccount;
    
    /**
     * Account number for the sales account outside EU.
     * The number must be of an existing account.
     * @var integer, 4 digits
     */
    public $ExportAccount;
    
    /**
     * The height of the article in millimeters.
     * @var integer, 8 digits
     */
    public $Height;
    
    /**
     * If the article is housework.
     * @var boolean
     */
    public $Housework;
    
    /**
     * The type of house work.
     * Can be CONSTRUCTION, ELECTRICITY, GLASSMETALWORK, GROUNDDRAINAGEWORK, MASONRY,
     * PAINTINGWALLPAPERING, HVAC, CLEANING, TEXTILECLOTHING, COOKING,
     * SNOWPLOWING, GARDENING, BABYSITTING, OTHERCARE, TUTORING, OTHERCOSTS or empty.
     * @var string
     */
    public $HouseworkType;
    
    /**
     * The manufacturer of the article
     * @var string, 50 characters, searchable
     */
    public $Manufacturer;
    
    /**
     * The manufacturers article number.
     * @var string, 50 characters, searchable
     */
    public $ManufacturerArticleNumber;
    
    /**
     * Text note.
     * @var string, 10 000 characters
     */
    public $Note;
    
    /**
     * Account number for purchase.
     * The number must be of an existing account.
     * @var integer, 4 digits
     */
    public $PurchaseAccount;
    
    /**
     * Purchase price of the article.
     * @var float, 14 digits
     */
    public $PurchasePrice;
    
    /**
     * Quantity in stock of the article.
     * @var float, 14 digits, sortable
     */
    public $QuantityInStock;
    
    /**
     * Reserved quantity of the article.
     * @var float, read-only, sortable
     */
    private $ReservedQuantity;
    
    /**
     * Account number for the sales account in Sweden.
     * The number must be of an existing account.
     * @var integer, 4 digits
     */
    public $SalesAccount;
    
    /**
     * Price of article for its default price list.
     * @var float, read-only
     */
    private $SalesPrice;
    
    /**
     * If the article is stock goods.
     * @var boolean
     */
    public $StockGoods;
    
    /**
     * Storage place for the article.
     * @var string, 100 characters
     */
    public $StockPlace;
    
    /**
     * Value in stock of the article.
     * @var float, read-only, sortable
     */
    private $StockValue;
    
    /**
     * When to start warning for low quantity in stock.
     * @var float, 14 digits
     */
    public $StockWarning;
    
    /**
     * Name of the supplier.
     * @var string, read-only
     */
    private $SupplierName;
    
    /**
     * Supplier number for the article.
     * The number must be of an existing supplier.
     * @var string, searchable
     */
    public $SupplierNumber;
    
    /**
     * The type of the article. Can be STOCK or SERVICE.
     * @var string
     */
    public $Type;
    
    /**
     * Unit code for the article. The code must be of an existing unit.
     * @var string
     */
    public $Unit;
    
    /**
     * VAT percent, this is predefined by the VAT for the sales account.
     * @var float
     */
    public $VAT;
    
    /**
     * If the article is a webshop article.
     * @var boolean
     */
    public $WebshopArticle;
    
    /**
     * Weight of the article in grams.
     * @var integer, 8 digits
     */
    public $Weight;
    
    /**
     * Width of the article in millimeters.
     * @var integer, 8 digits
     */
    public $Width;
    
    /**
     * If the article has expired.
     * @var boolean
     */
    public $Expired;
}
