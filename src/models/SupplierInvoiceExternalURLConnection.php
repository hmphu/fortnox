<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 10:47:08
 */

namespace hmphu\fortnox\models;

/**
 * Class SupplierInvoiceExternalURLConnection
 * @package hmphu\fortnox\models
 */
class SupplierInvoiceExternalURLConnection extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Id of the connection
     * @var integer
     */
    private $Id;
    
    /**
     * Supplier invoice number
     * @var integer
     */
    public $SupplierInvoiceNumber;
    
    /**
     * URL of the connection
     * @var string
     */
    public $ExternalURLConnection;
}
