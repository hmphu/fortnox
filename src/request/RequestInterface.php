<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 13:23:28
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 16:32:14
 */

namespace hmphu\fortnox\request;

/**
 * Interface RequestInterface
 * @package hmphu\fortnox
 */
interface RequestInterface {
    
    /**
     * @return array
     */
    public function getParameterArray();
}