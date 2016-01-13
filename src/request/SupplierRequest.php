<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:43:28
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 10:22:30
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
		if(!empty($data)){
			$this->parameters['json'] = [
				'Supplier' => $data
	        ];
		}
	}
}
