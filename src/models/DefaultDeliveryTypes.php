<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 16:20:02
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 16:56:04
 */
 
namespace hmphu\fortnox\models;

/**
 * Class DefaultDeliveryTypes
 * @package hmphu\fortnox\models
 */
final class DefaultDeliveryTypes extends BaseModel
{
	/**
	 * @var string
	 * Default delivery type for invoices. Can be PRINT EMAIL or PRINTSERVICE.
	 */
	public $Invoice = 'EMAIL';
	
	/**
	 * @var string
	 * Default delivery type for orders. Can be PRINT EMAIL or PRINTSERVICE.
	 */
	public $Order = 'EMAIL';
	
	/**
	 * @var string
	 * Default delivery type for offers. Can be PRINT EMAIL or PRINTSERVICE.
	 */
	public $Offer = 'EMAIL';
}