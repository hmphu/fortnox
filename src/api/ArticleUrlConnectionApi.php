<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 18:38:11
 */

namespace hmphu\fortnox\api;
use hmphu\fortnox\request\BasicRequest;
use hmphu\fortnox\request\PaginatedRequest;
use hmphu\fortnox\request\ArticleUrlConnectionRequest;
use hmphu\fortnox\models\BaseModel;

/**
 * Class ArticleUrlConnectionApi
 * @package hmphu\fortnox\api
 */
class ArticleUrlConnectionApi extends ApiAbstract implements ApiInterface
{
    /**
     * @return string[][] array of ArticleUrlConnections
     */
    public function all($page = 0, $limit = 10) {
    	$request = new PaginatedRequest($page, $limit);
        $datas = $this->getPaginated('/articleurlconnections', $request, 'ArticleUrlConnections');
        if(is_array($datas)){
        	foreach($datas as $key => $data){
        		$datas[$key] = new ArticleUrlConnection($data);
        	}
        }
    	return $datas;
    }

    /**
     * @param string $id
     * @return string[] supplier
     */
    public function get($id) {
    	$request = new BasicRequest();
        $data = $this->callJson('/articleurlconnections/' . $id, $request, 'ArticleUrlConnection');
        if(is_array($data)){
        	return new ArticleUrlConnection($data);
        }
    }

    /**
     * @param ArticleUrlConnection $data
     * @return ArticleUrlConnection
     */
    public function create(BaseModel $data) {
    	$request = new ArticleUrlConnectionRequest($data->toArray());
    	$request->method = 'POST';
        $data = $this->callJson('/articleurlconnections', $request, 'ArticleUrlConnection');
        if(is_array($data)){
        	return new ArticleUrlConnection($data);
        }
    }

    /**
     * @param string SupplierNumber
     * @param ArticleUrlConnection $data
     * @return ArticleUrlConnection
     */
    public function update($articleUrlConnectionNumber, BaseModel $data) {
    	$request = new ArticleUrlConnectionRequest($data->toArray());
    	$request->method = 'PUT';
        $data = $this->callJson('/articleurlconnections/' . $articleUrlConnectionNumber, $request, 'ArticleUrlConnection');
        if(is_array($data)){
        	return new ArticleUrlConnection($data);
        }
    }

    /**
     * Delete supplier
     * @param string supplierNumber
     */
 	public function delete($articleUrlConnectionNumber){
 		return '';
 	}   
}