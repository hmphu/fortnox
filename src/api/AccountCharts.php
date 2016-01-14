<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 18:20:25
 */

namespace hmphu\fortnox\api;

use hmphu\fortnox\models\AccountCharts;

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