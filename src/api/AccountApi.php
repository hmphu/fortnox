<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-26 14:33:28
 */

namespace hmphu\fortnox\api;

use hmphu\fortnox\request\BasicRequest;
use hmphu\fortnox\request\PaginatedRequest;
use hmphu\fortnox\request\AccountRequest;
use hmphu\fortnox\models\BaseModel;
use hmphu\fortnox\models\Account;

/**
 * Class AccountApi
 * @package hmphu\fortnox\api
 */
class AccountApi extends ApiAbstract implements ApiInterface
{
	/**
	 * @param $page Current page
	 * @param $limit Total items per page
	 * @param $query Search & Filters param
     * @return array of projects
     */
    public function all($page = 0, $limit = 10, $query = []) {
    	$request = new PaginatedRequest($page, $limit, $query);
        $datas = $this->getPaginated('/accounts', $request, 'Accounts');
        if(is_array($datas)){
        	foreach($datas as $key => $data){
        		$datas[$key] = new Account($data);
        	}
        }
    	return $datas;
    }

    /**
     * @param int $accountNumber
     * @return object customer
     */
    public function get($accountNumber) {
    	$request = new AccountRequest();
        $data = $this->callJson('/accounts/' . $accountNumber, $request, 'Account');
        if(is_array($data)){
        	return new Account($data);
        }
    }
    
    /**
     * @param object $data customer data
     * @return object customer
     */
    public function create(BaseModel $data){
    	$request = new AccountRequest($data->toArray());
    	$request->method = 'POST';
        $data = $this->callJson('/accounts', $request, 'Account');
        if(is_array($data)){
        	return new Account($data);
        }
    }

     /**
     * @param int $accountNumber
     * @param object $data
     * @return object customer
     */
    public function update($accountNumber, BaseModel $data) {
    	$request = new AccountRequest($data->toArray());
    	$request->method = 'PUT';
        $data = $this->callJson('/accounts/' . $accountNumber, $request, 'Account');
        if(is_array($data)){
        	return new Account($data);
        }
    }

    /**
     * @param $accountNumber
     * @return string response body
     */
    public function delete($accountNumber) {
    	$request = new AccountRequest();
    	$request->method = 'DELETE';
        $response = $this->call('/accounts/' . $accountNumber, $request);
        return  empty($response->getBody()) ? true : (string) $response->getBody();
    }
}