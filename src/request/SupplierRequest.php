<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:43:28
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 17:13:42
 */

namespace hmphu\fortnox\request;

/**
 * Class CustomerRequest
 * @package hmphu\fortnox\request
 */
class SupplierRequest extends RequestAbstract implements RequestInterface
{
	/**
	 * @data Array
	 */
	function __construct(array $data = []){
		$this->method = $method;
		if(!empty($data)){
			$this->parameters['json'] = [
				'Customer' => $data
	        ];
		}
	}
}
