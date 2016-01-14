<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 10:51:51
 */

namespace hmphu\fortnox\models;

/**
 * Class SupplierInvoiceFileConnection
 * @package hmphu\fortnox\models
 */
class SupplierInvoiceFileConnection extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Id of the file
     * @var string
     */
    public $FileId;
    
    /**
     * Name of the file
     * @var string
     */
    private $Name;
    
    /**
     * Supplier invoice number
     * @var string
     */
    public $SupplierInvoiceNumber;
    
    /**
     * Name of the supplier
     * @var string
     */
    private $SupplierName;
}
