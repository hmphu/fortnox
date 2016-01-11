<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:43:28
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 17:39:43
 */

namespace hmphu\fortnox\request;

/**
 * Class JsonRequest
 * @package hmphu\fortnox\request
 */
class JsonRequest extends RequestAbstract implements RequestInterface
{
	/**
	 * @data Array
	 */
	function __construct(array $data = []){
		if(!empty($data)){
			$this->parameters['json'] = $data;
		}
	}
}
