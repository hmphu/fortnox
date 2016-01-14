<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 09:56:22
 */

namespace hmphu\fortnox\models;

/**
 * Class EDIInformation
 * @package hmphu\fortnox\models
 */
class EDIInformation extends BaseModel
{
    /**
     * Invoice address GLN for EDI
     * @var string
     */
    public $EDIGlobalLocationNumber;
    
    /**
     * Delivery address GLN for EDI
     * @var string
     */
    public $EDIGlobalLocationNumberDelivery;
    
    /**
     * Extra EDI Information
     * @var string
     */
    public $EDIInvoiceExtra1;
    
    /**
     * Extra EDI Information
     * @var string
     */
    public $EDIInvoiceExtra2;
    
    /**
     * Our electronic reference for EDI
     * @var string
     */
    public $EDIOurElectronicReference;
    
    /**
     * Your electronic reference for EDI
     * @var string
     */
    public $EDIYourElectronicReference;
}
