<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 17:39:05
 */

namespace hmphu\fortnox\api;
use hmphu\fortnox\request\BasicRequest;
use hmphu\fortnox\request\PaginatedRequest;
use hmphu\fortnox\request\CustomerRequest;

/**
 * Class SupplierApi
 * @package hmphu\fortnox\api
 */
class SupplierApi extends ApiAbstract implements ApiInterface
{
    /**
     * @return string[][] array of suppliers
     */
    public function all($page = 0, $limit = 10) {
    	$request = new PaginatedRequest($page, $limit);
        return $this->getPaginated('/suppliers', $request, 'Suppliers');
    }

    /**
     * @param string $id
     * @return string[] supplier
     */
    public function get($id) {
    	$request = new BasicRequest();
        $data = $this->callJson('/suppliers/' . $id, $request, 'Supplier');
        if(is_array($data)){
        	return new Supplier($data);
        }
    }

    /**
     * @param Supplier $data
     * @return Supplier
     */
    public function create(Supplier $data) {
    	$request = new SupplierRequest($data->toArray());
    	$request->method = 'POST';
        $data = $this->callJson('/suppliers', $request, 'Supplier');
        if(is_array($data)){
        	return new Supplier($data);
        }
    }

    /**
     * @param string SupplierNumber
     * @param Supplier $data
     * @return Supplier
     */
    public function update($supplierNumber, Supplier $data) {
    	$request = new SupplierRequest($data->toArray());
    	$request->method = 'PUT';
        $data = $this->callJson('/suppliers/' . $supplierNumber, $request, 'Supplier');
        if(is_array($data)){
        	return new Supplier($data);
        }
    }

    /**
     * Delete supplier
     * @param string supplierNumber
     */
 	public function delete($supplierNumber){
 		return '';
 	}   
}