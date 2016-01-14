<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 18:40:44
 */

namespace hmphu\fortnox\api;

use hmphu\fortnox\request\BasicRequest;
use hmphu\fortnox\request\PaginatedRequest;
use hmphu\fortnox\request\ArticleRequest;
use hmphu\fortnox\models\BaseModel;
use hmphu\fortnox\models\Article;

/**
 * Class ArticleApi
 * @package hmphu\fortnox\api
 */
class ArticleApi extends ApiAbstract implements ApiInterface
{
	/**
     * @return array of customers
     */
    public function all($page = 0, $limit = 10) {
    	$request = new PaginatedRequest($page, $limit);
        $datas = $this->getPaginated('/articles', $request, 'Articles');
        if(is_array($datas)){
        	foreach($datas as $key => $data){
        		$datas[$key] = new Article($data);
        	}
        }
    	return $datas;
    }

    /**
     * @param int $customerNumber
     * @return object customer
     */
    public function get($customerNumber) {
    	$request = new ArticleRequest();
        $data = $this->callJson('/articles/' . $customerNumber, $request, 'Article');
        if(is_array($data)){
        	return new Article($data);
        }
    }
    
    /**
     * @param object $data customer data
     * @return object customer
     */
    public function create(BaseModel $data){
    	$request = new ArticleRequest($data->toArray());
    	$request->method = 'POST';
        $data = $this->callJson('/articles', $request, 'Article');
        if(is_array($data)){
        	return new Article($data);
        }
    }

     /**
     * @param int $customerNumber
     * @param object $data
     * @return object customer
     */
    public function update($customerNumber, BaseModel $data) {
    	$request = new ArticleRequest($data->toArray());
    	$request->method = 'PUT';
        $data = $this->callJson('/articles/' . $customerNumber, $request, 'Article');
        if(is_array($data)){
        	return new Article($data);
        }
    }

    /**
     * @param $customerNumber
     * @return string response body
     */
    public function delete($customerNumber) {
    	$request = new ArticleRequest();
    	$request->method = 'DELETE';
        $response = $this->call('/articles/' . $customerNumber, $request);
        return  empty($response->getBody()) ? true : (string) $response->getBody();
    }
}