<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-26 14:34:02
 */

namespace hmphu\fortnox\api;

use hmphu\fortnox\request\BasicRequest;
use hmphu\fortnox\request\PaginatedRequest;
use hmphu\fortnox\request\CustomerRequest;
use hmphu\fortnox\models\BaseModel;
use hmphu\fortnox\models\Customer;

/**
 * Class CustomerApi
 * @package hmphu\fortnox\api
 */
class CustomerApi extends ApiAbstract implements ApiInterface
{
	/**
	 * @param $page Current page
	 * @param $limit Total items per page
	 * @param $query Search & Filters param
     * @return array of customers
     */
    public function all($page = 0, $limit = 10, $query = []) {
    	$request = new PaginatedRequest($page, $limit, $query);
        $datas = $this->getPaginated('/customers', $request, 'Customers');
        if(is_array($datas)){
        	foreach($datas as $key => $data){
        		$datas[$key] = new Customer($data);
        	}
        }
    	return $datas;
    }

    /**
     * @param int $customerNumber
     * @return object customer
     */
    public function get($customerNumber) {
    	$request = new CustomerRequest();
        $data = $this->callJson('/customers/' . $customerNumber, $request, 'Customer');
        if(is_array($data)){
        	return new Customer($data);
        }
    }
    
    /**
     * @param object $data customer data
     * @return object customer
     */
    public function create(BaseModel $data){
    	$request = new CustomerRequest($data->toArray());
    	$request->method = 'POST';
        $data = $this->callJson('/customers', $request, 'Customer');
        if(is_array($data)){
        	return new Customer($data);
        }
    }

     /**
     * @param int $customerNumber
     * @param object $data
     * @return object customer
     */
    public function update($customerNumber, BaseModel $data) {
    	$request = new CustomerRequest($data->toArray());
    	$request->method = 'PUT';
        $data = $this->callJson('/customers/' . $customerNumber, $request, 'Customer');
        if(is_array($data)){
        	return new Customer($data);
        }
    }

    /**
     * @param $customerNumber
     * @return string response body
     */
    public function delete($customerNumber) {
    	$request = new CustomerRequest();
    	$request->method = 'DELETE';
        $response = $this->call('/customers/' . $customerNumber, $request);
        return  empty($response->getBody()) ? true : (string) $response->getBody();
    }
}