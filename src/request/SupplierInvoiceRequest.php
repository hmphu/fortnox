<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:43:28
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 17:24:52
 */

namespace hmphu\fortnox\request;

/**
 * Class SupplierInvoiceRequest
 * @package hmphu\fortnox\request
 */
class SupplierInvoiceRequest extends RequestAbstract implements RequestInterface
{
	/**
	 * @data Array
	 */
	function __construct(array $data = []){
		if(!empty($data)){
			$this->parameters['json'] = [
                'SupplierInvoice' => $data
            ];
		}
	}
}
