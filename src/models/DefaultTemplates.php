<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 16:20:02
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 16:38:09
 */
 
namespace hmphu\fortnox\models;

/**
 * Class DefaultTemplates
 * @package hmphu\fortnox\models
 */
final class DefaultTemplates extends BaseModel
{
	/**
	 * @var string
	 * Default template for orders. Must be a name of an existing print template.
	 */
	public $Order;
	/**
	 * @var  string
	 * Default template for offers. Must be a name of an existing print template.
	 */
	public $Offer;
	/**
	 * @var string
	 * Default template for invoices. Must be a name of an existing print template.
	 */
	public $Invoice;
	/**
	 * @var string
	 * Default template for cash invoices. Must be a name of an existing print template
	 */
	public $CashInvoice;
}