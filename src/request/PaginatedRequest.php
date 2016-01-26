<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:43:28
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-26 14:26:28
 */

namespace hmphu\fortnox\request;

/**
 * Class PaginatedRequest
 * @package hmphu\fortnox\request
 */
class PaginatedRequest extends RequestAbstract implements RequestInterface
{
	function __construct($page = 0, $limit= 10, $query = []){
		$this->parameters['query'] = is_array($query) ? $query : [];
		$this->parameters['query']['limit'] = $limit;
		$this->parameters['query']['page']  = $page;
	}	
}
