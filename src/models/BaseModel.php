<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-12 17:45:55
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-12 17:49:56
 */
 
namespace hmphu\fortnox\models;

/**
 * Class FortnoxConfig
 * @package hmphu\fortnox
 */
abstract class BaseModel
{
	public function toArray(){
		return get_object_vars($this);
	}
}