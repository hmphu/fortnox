<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 16:14:20
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-18 17:16:33
 */

namespace hmphu\fortnox;

use hmphu\fortnox\api\ApiAbstract;
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
	public $customer;
	public $article;
	public $project;
	public $supplier;
	public $account;
	public $archive;
	public $articlefileconnection;
	public $articlurleconnection;
	public $invoice;
    /**
     * @param FortnoxConfig $config
     */
    function __construct(FortnoxConfig $config, $https = true) {
        parent::__construct($config, $https);
        $this->customer = new \hmphu\fortnox\api\CustomerApi($config, $https);
        $this->article = new \hmphu\fortnox\api\ArticleApi($config, $https);
        $this->project = new \hmphu\fortnox\api\ProjectApi($config, $https);
        $this->supplier = new \hmphu\fortnox\api\SupplierApi($config, $https);
        $this->account = new \hmphu\fortnox\api\AccountApi($config, $https);
        $this->archive = new \hmphu\fortnox\api\ArchiveApi($config, $https);
        $this->articlefileconnection = new \hmphu\fortnox\api\ArticleFileConnectionApi($config, $https);
        $this->articleurlconnection = new \hmphu\fortnox\api\ArticleUrlConnectionApi($config, $https);
        $this->invoice = new \hmphu\fortnox\api\InvoiceApi($config, $https);
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