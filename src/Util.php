<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 16:14:20
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 17:53:42
 */

namespace hmphu\fortnox;

final class Util{
	public static function convertObjectToArray($obj, $removeEmpty = false) {
    	$arrObj = is_object($obj) ? get_object_vars($obj) : $obj;
    	
    	if($removeEmpty)
    		$arrObj = array_filter($arrObj);

    	foreach ($arrObj as $key => $val) {
    		$val = (is_array($val) || is_object($val)) ? static::convertObjectToArray($val, $removeEmpty) : $val;
    		$arr[$key] = $val;
    	}
    	return $arr;
	}
}