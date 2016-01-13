<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 10:46:45
 */
 
 namespace hmphu\fortnox\models;

/**
 * Class ContractAccrual
 * @package hmphu\fortnox\models
 */
class ContractAccrual extends BaseModel
{
	/**
	 * Type of period
	 * Can be MONTHLY / BIMONTHLY / QUARTERLY / SEMIANNUALLY / ANNUALLY
	 */
	const PERIOD_MONTHLY = 'MONTHLY';
	const PERIOD_BIMONTHLY = 'BIMONTHLY';
	const PERIOD_QUARTERLY = 'QUARTERLY';
	const PERIOD_SEMIANNUALLY = 'SEMIANNUALLY';
	const PERIOD_ANNUALLY = 'ANNUALLY';

	/**
	 * @var Integer Account for the accrual
	 */
	public $AccrualAccount;

	/**
	 * @var Integer Account for the cost
	 */
	public $CostAccount;

	/**
	 * AccrualRows
	 */
	public $AccrualRows;

	/**
	 * @var Integer Document number
	 */
	public $DocumentNumber;

	/**
	 * @var float Total of the accrual
	 */
	public $Total;
}