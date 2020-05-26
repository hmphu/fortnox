<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 16:14:20
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-25 16:49:37
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

	public static function removeUnicodeSequences($string) {
        return preg_replace_callback("/\\\\\\\\u([a-f0-9]{4})/", function ($m) {
	       return iconv('UCS-4LE','UTF-8', pack('V', hexdec('U'.$m[1])));
	   }, json_encode($string));
	}
}
