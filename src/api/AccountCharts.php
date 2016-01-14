<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 17:04:51
 */

namespace hmphu\fortnox\api;

/**
 * Class AccountCharts
 * @package hmphu\fortnox\api
 */
class AccountCharts extends ApiAbstract implements ApiInterface
{
	/**
	 * @return array
	 */
	public function all(){
		$request = new BasicRequest();
        return $this->getPaginated('/accountcharts', $request, 'AccountCharts');
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