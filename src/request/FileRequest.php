<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:43:28
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 17:18:06
 */

namespace hmphu\fortnox\request;

/**
 * Class FileRequest
 * @package hmphu\fortnox\request
 */
class FileRequest extends RequestAbstract implements RequestInterface
{
	/**
	 * @data Array
	 */
	function __construct(StreamInterface $data){
		$this->parameters['body'] = $data;
	}
}
