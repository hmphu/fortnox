<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 18:24:34
 */

namespace hmphu\fortnox\api;

use hmphu\fortnox\request\BasicRequest;
use hmphu\fortnox\request\PaginatedRequest;
use hmphu\fortnox\request\ProjectRequest;
use hmphu\fortnox\models\BaseModel;
use hmphu\fortnox\models\Project;

/**
 * Class ProjectApi
 * @package hmphu\fortnox\api
 */
class ProjectApi extends ApiAbstract implements ApiInterface
{
	/**
     * @return array of projects
     */
    public function all($page = 0, $limit = 10) {
    	$request = new PaginatedRequest($page, $limit);
        $datas = $this->getPaginated('/projects', $request, 'Projects');
        if(is_array($datas)){
        	foreach($datas as $key => $data){
        		$datas[$key] = new Project($data);
        	}
        }
    	return $datas;
    }

    /**
     * @param int $projectNumber
     * @return object customer
     */
    public function get($projectNumber) {
    	$request = new ProjectRequest();
        $data = $this->callJson('/projects/' . $projectNumber, $request, 'Project');
        if(is_array($data)){
        	return new Project($data);
        }
    }
    
    /**
     * @param object $data customer data
     * @return object customer
     */
    public function create(BaseModel $data){
    	$request = new ProjectRequest($data->toArray());
    	$request->method = 'POST';
        $data = $this->callJson('/projects', $request, 'Project');
        if(is_array($data)){
        	return new Project($data);
        }
    }

     /**
     * @param int $projectNumber
     * @param object $data
     * @return object customer
     */
    public function update($projectNumber, BaseModel $data) {
    	$request = new ProjectRequest($data->toArray());
    	$request->method = 'PUT';
        $data = $this->callJson('/projects/' . $projectNumber, $request, 'Project');
        if(is_array($data)){
        	return new Project($data);
        }
    }

    /**
     * @param $projectNumber
     * @return string response body
     */
    public function delete($projectNumber) {
    	$request = new ProjectRequest();
    	$request->method = 'DELETE';
        $response = $this->call('/projects/' . $projectNumber, $request);
        return  empty($response->getBody()) ? true : (string) $response->getBody();
    }
}