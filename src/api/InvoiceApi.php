<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-18 17:13:03
 */

namespace hmphu\fortnox\api;

use hmphu\fortnox\request\BasicRequest;
use hmphu\fortnox\request\PaginatedRequest;
use hmphu\fortnox\request\InvoiceRequest;
use hmphu\fortnox\models\BaseModel;
use hmphu\fortnox\models\Invoice;

/**
 * Class InvoiceApi
 * @package hmphu\fortnox\api
 */
class InvoiceApi extends ApiAbstract implements ApiInterface
{
	/**
     * @return array of invoices
     */
    public function all($page = 0, $limit = 10) {
    	$request = new PaginatedRequest($page, $limit);
        $datas = $this->getPaginated('/invoices', $request, 'Invoices');
        if(is_array($datas)){
        	foreach($datas as $key => $data){
        		$datas[$key] = new Invoice($data);
        	}
        }
    	return $datas;
    }

    /**
     * @param int $projectNumber
     * @return object customer
     */
    public function get($projectNumber) {
    	$request = new InvoiceRequest();
        $data = $this->callJson('/invoices/' . $projectNumber, $request, 'Invoice');
        if(is_array($data)){
        	return new Invoice($data);
        }
    }
    
    /**
     * @param object $data customer data
     * @return object customer
     */
    public function create(BaseModel $data){
    	$request = new InvoiceRequest($data->toArray());
    	$request->method = 'POST';
        $data = $this->callJson('/invoices', $request, 'Invoice');
        if(is_array($data)){
        	return new Invoice($data);
        }
    }

     /**
     * @param int $projectNumber
     * @param object $data
     * @return object customer
     */
    public function update($projectNumber, BaseModel $data) {
    	$request = new InvoiceRequest($data->toArray());
    	$request->method = 'PUT';
        $data = $this->callJson('/invoices/' . $projectNumber, $request, 'Invoice');
        if(is_array($data)){
        	return new Invoice($data);
        }
    }

    /**
     * @param $projectNumber
     * @return string response body
     */
    public function delete($projectNumber) {
    	$request = new InvoiceRequest();
    	$request->method = 'DELETE';
        $response = $this->call('/invoices/' . $projectNumber, $request);
        return  empty($response->getBody()) ? true : (string) $response->getBody();
    }
}