<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:14:56
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 10:21:31
 */

namespace hmphu\fortnox\models;

/**
 * Class FortnoxConfig
 * @package hmphu\fortnox
 */
class Supplier extends BaseModel
{
	/**
	 * Supplier name
	 * @var string
	 */
	public $Name;

	function __construct($data){
		if(is_string($data)){
			$this->Name = $data;
		}
		else{
			parent::__construct($data);
		}
	}
}