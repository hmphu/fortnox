<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 16:14:20
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 10:22:17
 */

namespace hmphu\fortnox;

use hmphu\fortnox\request\BasicRequest;
use hmphu\fortnox\request\CustomerRequest;
use hmphu\fortnox\request\SupplierRequest;
use hmphu\fortnox\request\FileRequest;
use hmphu\fortnox\request\SupplierInvoiceFileConnectionRequest;
use hmphu\fortnox\request\SupplierInvoiceRequest;
use hmphu\fortnox\request\ProjectRequest;
use hmphu\fortnox\request\QueryRequest;
use hmphu\fortnox\request\JsonRequest;
use hmphu\fortnox\models\Project;
use hmphu\fortnox\models\Customer;
use hmphu\fortnox\models\Supplier;

/**
 * Class FortnoxApi
 * @package hmphu\fortnox
 */
class FortnoxApi extends ApiAbstract
{
    /**
     * @param FortnoxConfig $config
     */
    function __construct(FortnoxConfig $config, $https = true) {
        parent::__construct($config, $https);
    }

    /**
     * @return string[][] array of customers
     */
    public function getCustomers() {
    	$request = new BasicRequest();
        return $this->getPaginated('/customers', $request, 'Customers');
    }

    /**
     * @param int $customerNumber
     * @return string[] customer
     */
    public function getCustomer($customerNumber) {
    	$request = new CustomerRequest();
        $data = $this->callJson('/customers/' . $customerNumber, $request, 'Customer');
        if(is_array($data)){
        	return new Customer($data);
        }
    }
    
    /**
     * @param string[] $data customer data
     * @return string[] customer
     */
    public function createCustomer(Customer $data) {
    	$request = new CustomerRequest($data->toArray());
    	$request->method = 'POST';
        $data = $this->callJson('/customers', $request, 'Customer');
        if(is_array($data)){
        	return new Customer($data);
        }
    }

     /**
     * @param int $customerNumber
     * @param string[] $data
     * @return string[] customer
     */
    public function updateCustomer($customerNumber, Customer $data) {
    	$request = new CustomerRequest($data->toArray());
    	$request->method = 'PUT';
        $data = $this->callJson('/customers/' . $customerNumber, $request, 'Customer');
        if(is_array($data)){
        	return new Customer($data);
        }
    }

    /**
     * @param $customerNumber
     * @return string response body
     */
    public function deleteCustomer($customerNumber) {
    	$request = new CustomerRequest();
    	$request->method = 'DELETE';
        $response = $this->call('/customers/' . $customerNumber, $request);
        return  empty($response->getBody()) ? true : (string) $response->getBody();
    }

    /**
     * @return string[][] array of suppliers
     */
    public function getSuppliers() {
    	$request = new BasicRequest();
        return $this->getPaginated('/suppliers', $request, 'Suppliers');
    }

    /**
     * @param string $id
     * @return string[] supplier
     */
    public function getSupplier($id) {
    	$request = new BasicRequest();
        $data = $this->callJson('/suppliers/' . $id, $request, 'Supplier');
        if(is_array($data)){
        	return new Supplier($data);
        }
    }

    /**
     * @param Supplier $data
     * @return Supplier
     */
    public function createSupplier(Supplier $data) {
    	$request = new SupplierRequest($data->toArray());
    	$request->method = 'POST';
        $data = $this->callJson('/suppliers', $request, 'Supplier');
        if(is_array($data)){
        	return new Supplier($data);
        }
    }

    /**
     * @param string SupplierNumber
     * @param Supplier $data
     * @return Supplier
     */
    public function updateSupplier($supplierNumber, Supplier $data) {
    	$request = new SupplierRequest($data->toArray());
    	$request->method = 'PUT';
        $data = $this->callJson('/suppliers/' . $supplierNumber, $request, 'Supplier');
        if(is_array($data)){
        	return new Supplier($data);
        }
    }

    /**
     * @param int $id
     * @return string file body
     */
    public function getInboxFile($id) {
    	$request = new BasicRequest();
        $response = $this->call('/inbox/' . $id, $request);
        return $this->parseJsonResponse($response);
    }

    /**
     * @param mixed $id
     * @return string file body
     */
    public function deleteInboxFile($id) {
    	$request = new BasicRequest();
    	$request->method = 'DELETE';
        $response = $this->sendRequest('/inbox/' . $id, $request);
        return  empty($response->getBody()) ? true : (string) $response->getBody();
    }

    /**
     * @param StreamInterface $data
     * @return string[]
     */
    public function putInboxFile(StreamInterface $data) {
    	$request = new FileRequest($data);
    	$request->method = 'POST';

        return $this->callJson('/inbox', $request, 'File');
    }

    /**
     * @param mixed $supplierInvoiceNumber
     * @param mixed $fileId
     * @return string[]
     */
    public function createSupplierInvoiceFileConnection($supplierInvoiceNumber, $fileId) {
    	$request = new SupplierInvoiceFileConnectionRequest($supplierInvoiceNumber, $fileId);
    	$request->method = 'POST';

        return $this->callJson('/supplierinvoicefileconnections', $request, 'SupplierInvoiceFileConnection');
    }

    /**
     * @return string[][]
     */
    public function getSupplierInvoiceFileConnections() {
    	$request = new BasicRequest();
        return $this->callJson('/supplierinvoicefileconnections', $request, 'SupplierInvoiceFileConnections');
    }

     /**
     * @param array $options guzzle request options
     * @return string[][]
     */
    public function getSupplierInvoices(array $options = []) {
    	$request = new BasicRequest($options);
        return $this->getPaginated('/supplierinvoices', $request, 'SupplierInvoices');
    }

    /**
     * @param int $id
     * @return string[]
     */
    public function getSupplierInvoice($id) {
    	$request = new SupplierInvoiceRequest();
        return $this->callJson('/supplierinvoices/' . $id, $request, 'SupplierInvoice');
    }
    /**
     * @param array $data
     * @return string[]
     */
    public function createSupplierInvoice(array $data) {
    	$request = new SupplierInvoiceRequest($data);
    	$request->method = 'POST';

        return $this->callJson('/supplierinvoices', $request, 'SupplierInvoice');
    }

     /**
     * @param int $id
     * @param array $data the supplier invoice data
     * @return array
     */
    public function updateSupplierInvoice($id, array $data) {
    	$request = new SupplierInvoiceRequest($data);
    	$request->method = 'PUT';
        return $this->callJson('/supplierinvoices/' . $id, $request, 'SupplierInvoice');
    }

     /**
     * @return string[][] array of projects
     */
    public function getProjects() {
    	$request = new ProjectRequest();
        return $this->callJson('/projects', $request, 'Projects');
    }

    /**
     * @param int $projectNumber
     * @return string[] project
     */
    public function getProject($projectNumber) {
    	$request = new ProjectRequest();
        $data = $this->callJson('/projects/' . $projectNumber, $request, 'Project');
        if(is_array($data)){
    		return new Project($data);
    	}
    }

    /**
     * @param string[] $data
     * @return string[] project
     */
    public function createProject(Project $data) {
    	$request = new ProjectRequest($data->toArray());
    	$request->method = 'POST';

        return $this->callJson('/projects', $request, 'Project');
    }

    /**
     * @param int $projectNumber
     * @param Project $data
     * @return mixed
     */
    public function updateProject($projectNumber, Project $data) {
    	$request = new ProjectRequest($data->toArray());
    	$request->method = 'PUT';

        return $this->callJson('/projects/' . $projectNumber, $request, 'Project');
    }

    /**
     * @param int $projectNumber
     * @return string
     */
    public function deleteProject($projectNumber) {
    	$request = new ProjectRequest();
    	$request->method = 'DELETE';
        $response = $this->call('/projects/' . $projectNumber, $request);
        
        return (string) $response->getBody();
    }

     /**
     * @param string $financialYearDate date of the financial year to use (Y-m-d)
     * @return array
     */
    public function getVouchers($financialYearDate) {
    	$request = new QueryRequest(['financialyeardate' => $financialYearDate]);
        return $this->getPaginated('/vouchers', $request, 'Vouchers');
    }

    /**
     * @param string $series
     * @param string $voucherNumber
     * @param string $financialYearDate date of the financial year to use (Y-m-d)
     * @return array
     */
    public function getVoucher($series, $voucherNumber, $financialYearDate) {
        $endpoint = sprintf('/vouchers/%s/%s', $series, $voucherNumber);
        $request = new QueryRequest(['financialyeardate' => $financialYearDate]);
        return $this->callJson($endpoint, $request, 'Voucher');
    }

    /**
     * @param array $data
     * @return array
     */
    public function createVoucher(array $data) {
    	$request = new JsonRequest(['Voucher' => $data]);
    	$request->method = 'POST';
        return $this->callJson('/vouchers', $request, 'Voucher');
    }
}