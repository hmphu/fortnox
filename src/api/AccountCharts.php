<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-26 14:33:34
 */

namespace hmphu\fortnox\api;

use hmphu\fortnox\models\AccountCharts;
use hmphu\fortnox\request\PaginatedRequest;

/**
 * Class AccountCharts
 * @package hmphu\fortnox\api
 */
class AccountCharts extends ApiAbstract implements ApiInterface
{
	/**
	 * @param $page Current page
	 * @param $limit Total items per page
	 * @param $query Search & Filters param
	 * @return array
	 */
	public function all($page = 0, $limit = 10, $query = []){
		$request = new PaginatedRequest($page, $limit, $query);
        $datas = $this->getPaginated('/accountcharts', $request, 'AccountCharts');
        if(is_array($datas)){
        	foreach($datas as $key => $data){
        		$datas[$key] = new AccountCharts($data);
        	}
        }
    	return $datas;
	}
	/**
	 * @return object
	 */
	public function get($key){
		
	}
	/**
	 * @return object
	 */
	public function create(BaseModel $data){
		
	}
	/**
	 * @return object
	 */
	public function update($key, BaseModel $data){
		
	}
	/**
	 * @return string response body
	 */
	public function delete($key){
		
	}
}