<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 18:02:39
 */

namespace hmphu\fortnox\models;

/**
 * Class SupplierInvoiceAccrual
 * @package hmphu\fortnox\models
 */
class SupplierInvoiceAccrual extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Account for the accrual, 4 digits
     * @var integer
     */
    public $AccrualAccount;
    
    /**
     * Account for the cost, 4 digits
     * @var integer
     */
    public $CostAccount;
    
    /**
     * Description of the accrual
     * @var string
     */
    public $Description;
    
    /**
     * End date
     * @var date
     */
    public $EndDate;
    
    /**
     * Number of the supplier invoice
     * @var integer
     */
    public $SupplierInvoiceNumber;
    
    /**
     * Type of period
     * Can be: MONTHLY / BIMONTHLY / QUARTERLY / SEMIANNUALLY / ANNUALLY / {X}_MONTHS
     * @var string
     */
    public $Period = 'MONTHLY';
    
    /**
     * @var object[]
     */
    private $SupplierInvoiceAccrualRows = [];
    
    /**
     * Start date
     * @var date
     */
    public $StartDate;
    
    /**
     * Total times of accruals
     * @var integer
     */
    private $Times;
    
    /**
     * Total of the accrual
     * @var float
     */
    public $Total;
    
    /**
     * Is VAT included
     * @var boolean
     */
    public $VATIncluded;

    public function __construct1(array $data) {
		parent::__construct1($data);
		$supplierInvoiceAccrualRows = [];
		foreach($this->SupplierInvoiceAccrualRows as $row){
			$supplierInvoiceAccrualRows[] = new SupplierInvoiceAccrualRow($row);
		}
		$this->SupplierInvoiceAccrualRows = $supplierInvoiceAccrualRows;
	}
}
