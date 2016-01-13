<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-12 19:15:21
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 09:41:43
 */

namespace hmphu\fortnox\models;

/**
 * Class FortnoxConfig
 * @package hmphu\fortnox
 */
class Project extends BaseModel
{
	const STATUS_NOTSTARTED = 'NOTSTARTED';
	const STATUS_ONGOING = 'ONGOING';
	const STATUS_COMPLETED = 'COMPLETED';

	/**
	 * Comments on project
	 * @var string
	 */
	public $Comments;
	
	/**
	 * ContactPerson for project.
	 * @var string
	 */
	public $ContactPerson;
	
	/**
	 * Description of the project
	 * @var string
	 */
	public $Description;
	
	/**
	 * End date of the project.
	 * @var date
	 */
	public $EndDate;
	
	/**
	 * Projectleader
	 * @var string
	 */
	public $ProjectLeader;
	
	/**
	 * Projectnumber
	 * @var string
	 */
	public $ProjectNumber;
	
	/**
	 * Status of the project, must be: NOTSTARTED / ONGOING / COMPLETED
	 * @var string
	 */
	public $Status;

	/**
	 * Start date of the project
	 * @var date
	 */
	public $StartDate;

	function __construct8($Comments = null, $ContactPerson = null, $Description = null, $EndDate = null, $ProjectLeader = null, $ProjectNumber = null, $Status = self::STATUS_NOTSTARTED, $StartDate = null){
		if ($Status != static::STATUS_NOTSTARTED && $Status != static::STATUS_ONGOING && $Status != static::STATUS_COMPLETED) {
            throw new \Exception(sprintf("Type must be: '%s' or '%s' or '%s'", static ::STATUS_NOTSTARTED, static ::STATUS_ONGOING, static::STATUS_COMPLETED));
        }
		$this->Comments = $Comments;
		$this->ContactPerson = $ContactPerson;
		$this->Description = $Description;
		$this->EndDate = $EndDate;
		$this->ProjectLeader = $ProjectLeader;
		$this->ProjectNumber = $ProjectNumber;
		$this->Status = $Status;
		$this->StartDate = $StartDate;
	}
}
