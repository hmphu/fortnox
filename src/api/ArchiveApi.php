<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-26 14:33:42
 */

namespace hmphu\fortnox\api;
use hmphu\fortnox\request\BasicRequest;
use hmphu\fortnox\request\PaginatedRequest;
use hmphu\fortnox\request\SupplierRequest;
use hmphu\fortnox\models\BaseModel;
use hmphu\fortnox\models\Folder;

/**
 * Class ArchiveApi
 * @package hmphu\fortnox\api
 */
class ArchiveApi extends ApiAbstract implements ApiInterface
{
    /**
     * @param $page Current page
	 * @param $limit Total items per page
	 * @param $query Search & Filters param
     * @return string[][] array of suppliers
     */
    public function all($page = 0, $limit = 10, $query = []) {
    	$request = new PaginatedRequest($page, $limit, $query);
        $datas = $this->getPaginated('/archive', $request, 'Folder');
        if(is_array($datas)){
        	foreach($datas as $key => $data){
        		$datas[$key] = new Folder($data);
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
        $data = $this->callJson('/archive/' . $id, $request, 'Folder');
        if(is_array($data)){
        	return new Folder($data);
        }
    }

    /**
     * @param Supplier $data
     * @return Supplier
     */
    public function create(BaseModel $data) {
    	$request = new FolderRequest($data->toArray());
    	$request->method = 'POST';
        $data = $this->callJson('/archive', $request, 'Folder');
        if(is_array($data)){
        	return new Folder($data);
        }
    }

    /**
     * @param string SupplierNumber
     * @param Supplier $data
     * @return Supplier
     */
    public function update($supplierNumber, BaseModel $data) {
    	$request = new FolderRequest($data->toArray());
    	$request->method = 'PUT';
        $data = $this->callJson('/archive/' . $supplierNumber, $request, 'Folder');
        if(is_array($data)){
        	return new Folder($data);
        }
    }

    /**
     * Delete supplier
     * @param string supplierNumber
     */
 	public function delete($supplierNumber){
 		return '';
 	}   
}