<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 16:14:20
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-18 17:24:50
 */

namespace hmphu\fortnox;

final class Util{
	public static function convertObjectToArray($obj, $removeEmpty = false) {
    	$arrObj = is_object($obj) ? get_object_vars($obj) : $obj;
    	
    	if($removeEmpty)
    		$arrObj = array_filter($arrObj);
    	$arr = [];
    	foreach ($arrObj as $key => $val) {
    		$val = (is_array($val) || is_object($val)) ? static::convertObjectToArray($val, $removeEmpty) : $val;
    		$arr[$key] = $val;
    	}
    	return $removeEmpty ? array_filter($arr) : $arr;
	}
}