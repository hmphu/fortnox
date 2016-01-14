<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:43:28
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 17:37:26
 */

namespace hmphu\fortnox\request;

/**
 * Class PaginatedRequest
 * @package hmphu\fortnox\request
 */
class PaginatedRequest extends RequestAbstract implements RequestInterface
{
	function __construct($page = 0, $limit= 10){
		$this->parameters['query'] = [
			'limit' => $limit,
			'page'  => $page,
		];
	}	
}
