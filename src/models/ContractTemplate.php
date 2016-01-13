<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 10:50:59
 */

namespace hmphu\fortnox\models;

/**
 * Class ContractTemplate
 * @package hmphu\fortnox\models
 */
class ContractTemplate extends BaseModel
{
	/**
	 * @var integer Invoice interval
	 */
	public $InvoiceInterval;

	/**
	 * @var array
	 */
	public $InvoiceRows;

	/**
	 * @var boolean If the contract is continuous
	 */
	public $Continuous;

	/**
	 * @var string Name of the template
	 */
	public $TemplateName;
}