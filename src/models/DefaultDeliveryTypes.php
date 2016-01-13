<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 16:20:02
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 16:38:03
 */
 
namespace hmphu\fortnox\models;

/**
 * Class DefaultDeliveryTypes
 * @package hmphu\fortnox\models
 */
final class DefaultDeliveryTypes extends BaseModel
{
	private $_AllowInvoice = ['PRINT','EMAIL','PRINTSERVICE'];
	private $_AllowOrder = ['PRINT','EMAIL','PRINTSERVICE'];
	private $_AllowOffer = ['PRINT','EMAIL','PRINTSERVICE'];

	/**
	 * @var string
	 * Default delivery type for invoices. Can be PRINT EMAIL or PRINTSERVICE.
	 */
	public $Invoice;
	
	/**
	 * @var string
	 * Default delivery type for orders. Can be PRINT EMAIL or PRINTSERVICE.
	 */
	public $Order;
	
	/**
	 * @var string
	 * Default delivery type for offers. Can be PRINT EMAIL or PRINTSERVICE.
	 */
	public $Offer;
}