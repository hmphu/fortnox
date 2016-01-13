<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:28:47
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 10:35:20
 */

namespace hmphu\fortnox\models;

/**
 * Class Account
 * @package hmphu\fortnox\models
 */
class Account extends BaseModel
{
	/**
	 * Cost center settings for the account. Can be ALLOWED MANDATORY or NOTALLOWED
	 */
	const COSTCENTERSETTINGS_ALLOWED = 'ALLOWED';
	const COSTCENTERSETTINGS_MANDATORY = 'MANDATORY';
	const COSTCENTERSETTINGS_NOTALLOWED = 'NOTALLOWED';
	/**
	 * Project settings for the account. Can be ALLOWED MANDATORY or NOTALLOWED
	 */
	const PROJECTSETTINGS_ALLOWED = 'ALLOWED';
	const PROJECTSETTINGS_MANDATORY = 'MANDATORY';
	const PROJECTSETTINGS_NOTALLOWED = 'NOTALLOWED';

	/**
	 *  Transaction information settings for the account. Can be ALLOWED MANDATORY or NOTALLOWED
	 */
	const TRANSACTIONINFORMATIONSETTINGS_ALLOWED = 'ALLOWED';
	const TRANSACTIONINFORMATIONSETTINGS_MANDATORY = 'MANDATORY';
	const TRANSACTIONINFORMATIONSETTINGS_NOTALLOWED = 'NOTALLOWED';

	/**
	 * @var string Account description
	 */
	public $Description;

	/**
	 * @var string  Account number
	 */
	public $Number;

	function __construct2($Description, $Number){
		$this->Description = $Description;
		$this->Number = $Number;
	}
}