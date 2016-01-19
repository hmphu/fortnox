<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:43:28
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-18 17:13:36
 */

namespace hmphu\fortnox\request;

/**
 * Class InvoiceRequest
 * @package hmphu\fortnox\request
 */
class InvoiceRequest extends RequestAbstract implements RequestInterface
{
	/**
	 * @data Array
	 */
	function __construct(array $data = []){
		if(!empty($data)){
			$this->parameters['json'] = [
				'Invoice' => $data
	        ];
		}
	}
}
