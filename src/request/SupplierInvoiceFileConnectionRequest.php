<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:43:28
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 17:21:17
 */

namespace hmphu\fortnox\request;

/**
 * Class SupplierInvoiceFileConnectionRequest
 * @package hmphu\fortnox\request
 */
class SupplierInvoiceFileConnectionRequest extends RequestAbstract implements RequestInterface
{
	/**
	 * @var $supplierInvoiceNumber
	 * @var $fileId
	 */
	function __construct($supplierInvoiceNumber, $fileId){
		$this->parameters['json'] = [
			'SupplierInvoiceFileConnection' => [
				'SupplierInvoiceNumber' => $supplierInvoiceNumber,
				'FileId' => $fileId,
			]
		];
	}
}
