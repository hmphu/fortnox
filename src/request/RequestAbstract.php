<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:36:01
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 16:52:04
 */

namespace hmphu\fortnox\request;

/**
 * Class RequestAbstract
 * @package hmphu\fortnox\request
 */
abstract class RequestAbstract
{
    /**
     * @var
     */
    public $method = 'GET';

    /**
     * @var
     */
    public $parameters = [];
    
    /**
     * @return array
     */
    public function getParameterArray() {
        return $this->parameters;
    }
}
