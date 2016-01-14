<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 18:36:14
 */

namespace hmphu\fortnox\api;
use hmphu\fortnox\request\BasicRequest;
use hmphu\fortnox\request\PaginatedRequest;
use hmphu\fortnox\request\ArticleFileConnectionRequest;
use hmphu\fortnox\models\BaseModel;

/**
 * Class ArticleFileConnectionApi
 * @package hmphu\fortnox\api
 */
class ArticleFileConnectionApi extends ApiAbstract implements ApiInterface
{
    /**
     * @return string[][] array of ArticleFileConnections
     */
    public function all($page = 0, $limit = 10) {
    	$request = new PaginatedRequest($page, $limit);
        $datas = $this->getPaginated('/articlefileconnections', $request, 'ArticleFileConnections');
        if(is_array($datas)){
        	foreach($datas as $key => $data){
        		$datas[$key] = new ArticleFileConnection($data);
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
        $data = $this->callJson('/articlefileconnections/' . $id, $request, 'ArticleFileConnection');
        if(is_array($data)){
        	return new ArticleFileConnection($data);
        }
    }

    /**
     * @param ArticleFileConnection $data
     * @return ArticleFileConnection
     */
    public function create(BaseModel $data) {
    	$request = new ArticleFileConnectionRequest($data->toArray());
    	$request->method = 'POST';
        $data = $this->callJson('/articlefileconnections', $request, 'ArticleFileConnection');
        if(is_array($data)){
        	return new ArticleFileConnection($data);
        }
    }

    /**
     * @param string SupplierNumber
     * @param ArticleFileConnection $data
     * @return ArticleFileConnection
     */
    public function update($articleFileConnectionNumber, BaseModel $data) {
    	$request = new ArticleFileConnectionRequest($data->toArray());
    	$request->method = 'PUT';
        $data = $this->callJson('/articlefileconnections/' . $articleFileConnectionNumber, $request, 'ArticleFileConnection');
        if(is_array($data)){
        	return new ArticleFileConnection($data);
        }
    }

    /**
     * Delete supplier
     * @param string supplierNumber
     */
 	public function delete($articleFileConnectionNumber){
 		return '';
 	}   
}