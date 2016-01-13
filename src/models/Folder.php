<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:35:10
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 10:36:43
 */
 
 namespace hmphu\fortnox\models;

/**
 * Class Folder
 * @package hmphu\fortnox\models
 */
class Folder extends BaseModel
{
	/**
	 * @var string Folder name
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