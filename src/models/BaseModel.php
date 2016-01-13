<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-12 17:45:55
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 10:00:58
 */

namespace hmphu\fortnox\models;

/**
 * Class FortnoxConfig
 * @package hmphu\fortnox
 */
abstract class BaseModel
{
    /**
     * Magic construct function.
     * If you want to define a new construct function with multiple args
     * simply create new __construct<total_args>(<args...>) function
     */
    function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    } 

    /**
     * Parse data from array
     */
    public function __construct1(array $data)
    {
    	foreach($data as $key => $value){
    		$this->__set($key, $value);
    	}
    }

    /**
     * Convert to array
     */
    public function toArray() {
    	return get_object_vars($this);
    }
    
    /**
     * Magic Set method
     */
    public function __set($property, $value) {
    	if(strpos($property, '@') === 0)
    		$property = substr($property, 1);
    	$this->$property = $value;
    }
    	
    /**
     * Magic Get method
     */
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
}
