<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 16:14:20
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-11 17:44:17
 */

namespace hmphu\fortnox;

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
        return $this->callJson('/customers/' . $customerNumber, $request, 'Customer');
    }
    
    /**
     * @param string[] $data customer data
     * @return string[] customer
     */
    public function createCustomer(array $data) {
    	$request = new CustomerRequest($data);
    	$request->method = 'POST';
        return $this->callJson('/customers', $request, 'Customer');
    }

     /**
     * @param int $customerNumber
     * @param string[] $data
     * @return string[] customer
     */
    public function updateCustomer($customerNumber, array $data) {
    	$request = new CustomerRequest($data);
    	$request->method = 'PUT';
        return $this->callJson('/customers/' . $customerNumber, $request, 'Customer');
    }

    /**
     * @param $customerNumber
     * @return string response body
     */
    public function deleteCustomer($customerNumber) {
    	$request = new CustomerRequest();
    	$request->method = 'DELETE';
        $response = $this->call('/customers/' . $customerNumber, $request);
        return (string) $response->getBody();
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
        return $this->callJson('/suppliers/' . $id, $request, 'Supplier');
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
        return (string) $response->getBody();
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
        return $this->callJson('/projects/' . $projectNumber, $request, 'Project');
    }

    /**
     * @param string[] $data
     * @return string[] project
     */
    public function createProject(array $data) {
    	$request = new ProjectRequest($data);
    	$request->method = 'POST';

        return $this->callJson('/projects', $request, 'Project');
    }

    /**
     * @param int $projectNumber
     * @param string[] $data
     * @return mixed
     */
    public function updateProject($projectNumber, array $data) {
    	$request = new ProjectRequest($data);
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