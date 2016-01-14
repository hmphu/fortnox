<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 16:59:49
 */

namespace hmphu\fortnox\models;

/**
 * Class SupplierInvoiceRow
 * @package hmphu\fortnox\models
 */
class SupplierInvoiceRow extends BaseModel
{
    
    /**
     * Account number (If empty Fortnox will use settings from the article)
     * @var integer
     */
    private $Account;
    
    /**
     * Article number
     * @var string
     */
    private $ArticleNumber;
    
    /**
     * Row code:
     * TOT = Total
     * VAT = VAT
     * FRT = Freight
     * AFE = Administration Fee
     * ROV = Round off
     * CND = Reverse charge ingoing
     * CNC = Reverse charge outgoing,
     * PRD = Reverse VAT ingoing
     * PRC = Reverse VAT outgoing
     * @var string
     */
    public $Code = 'TOT';
    
    /**
     * Cost center code
     * @var string
     */
    public $CostCenter;
    
    /**
     * Account Description
     * @var string
     */
    public $AccountDescription;
    
    /**
     * Item Description
     * @var string
     */
    public $ItemDescription;
    
    /**
     * Debit
     * @var float
     */
    public $Debit;
    
    /**
     * Debit currency
     * @var float
     */
    public $DebitCurrency;
    
    /**
     * Credit
     * @var float
     */
    public $Credit;
    
    /**
     * Credit currency
     * @var float
     */
    public $CreditCurrency;
    
    /**
     * Project code
     * @var float
     */
    public $Project;
    
    /**
     * Unit price
     * @var float
     */
    public $Price;
    
    /**
     * Quantity
     * @var float
     */
    public $Quantity;
    
    /**
     * Row amount
     * @var float
     */
    private $Total;
    
    /**
     * Code of unit
     * @var string
     */
    public $Unit;
}
