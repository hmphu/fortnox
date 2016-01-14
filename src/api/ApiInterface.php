<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 17:38:31
 */

namespace hmphu\fortnox\api;

use hmphu\fortnox\models\BaseModel;

/**
 * Interface ApiInterface
 * @package hmphu\payoneer
 */
interface ApiInterface {
    
	/**
	 * @return array
	 */
	public function all($page = 0, $limit = 10);
	/**
	 * @return object
	 */
	public function get($key);
	/**
	 * @return object
	 */
	public function create(BaseModel $data);
	/**
	 * @return object
	 */
	public function update($key, BaseModel $data);
	/**
	 * @return string response body
	 */
	public function delete($key);
}