<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-14 11:52:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-02-01 17:53:53
 */

namespace hmphu\fortnox\api;

use hmphu\fortnox\request\BasicRequest;
use hmphu\fortnox\request\PaginatedRequest;
use hmphu\fortnox\request\InvoiceRequest;
use hmphu\fortnox\models\BaseModel;
use hmphu\fortnox\models\Invoice;

/**
 * Class InvoiceApi
 * @package hmphu\fortnox\api
 */
class InvoiceApi extends ApiAbstract implements ApiInterface
{
	/**
	 * @param $page Current page
	 * @param $limit Total items per page
	 * @param $query Search & Filters param
     * @return array of invoices
     */
    public function all($page = 0, $limit = 10, $query = []) {
    	$request = new PaginatedRequest($page, $limit, $query);
        $datas = $this->getPaginated('/invoices', $request, 'Invoices');
        if(is_array($datas)){
        	foreach($datas as $key => $data){
        		$datas[$key] = new Invoice($data);
        	}
        }
    	return $datas;
    }

    /**
     * @param int $invoiceNumber
     * @return object invoice
     */
    public function get($invoiceNumber) {
    	$request = new InvoiceRequest();
        $data = $this->callJson('/invoices/' . $invoiceNumber, $request, 'Invoice');
        if(is_array($data)){
        	return new Invoice($data);
        }
    }
    
    /**
     * @param object $data customer data
     * @return object invoice
     */
    public function create(BaseModel $data){
    	$request = new InvoiceRequest($data->toArray());
    	$request->method = 'POST';
        $data = $this->callJson('/invoices', $request, 'Invoice');
        if(is_array($data)){
        	return new Invoice($data);
        }
    }

     /**
     * @param int $invoiceNumber
     * @param object $data
     * @return object invoice
     */
    public function update($invoiceNumber, BaseModel $data) {
    	$request = new InvoiceRequest($data->toArray());
    	$request->method = 'PUT';
        $data = $this->callJson('/invoices/' . $invoiceNumber, $request, 'Invoice');
        if(is_array($data)){
        	return new Invoice($data);
        }
    }

    /**
     * @param $invoiceNumber
     * @return string response body
     */
    public function delete($invoiceNumber) {
    	$request = new InvoiceRequest();
    	$request->method = 'DELETE';
        $response = $this->call('/invoices/' . $invoiceNumber, $request);
        return  empty($response->getBody()) ? true : (string) $response->getBody();
    }

    /**
     * Bookkeeps an invoice
     * @param int $invoiceNumber
     * return $mixed
     */
    public function bookkeep($invoiceNumber){
    	$request = new InvoiceRequest();
    	$request->method = 'PUT';
        $data = $this->call('/invoices/' . $invoiceNumber . '/bookkeep', $request);
        return $data->getBody();
    }

	/**
	 * Cancels an invoice
	 * @param int $invoiceNumber
	 * return $mixed
	 */
	public function cancel($invoiceNumber){
		$request = new InvoiceRequest();
		$request->method = "PUT";
        $data = $this->call('/invoices/' . $invoiceNumber . '/cancel', $request);
        return $data->getBody();
	}

	/**
	 * Creates a credit invoice from the provided invoice. The created credit invoice will be referenced in the property CreditInvoiceReference.
	 * @param int $invoiceNumber
	 * return $mixed
	 */
	public function credit($invoiceNumber){
		$request = new InvoiceRequest();
		$request->method = "PUT";
        $data = $this->call('/invoices/' . $invoiceNumber . '/credit', $request);
        return $data->getBody();
	}

	/**
	 * Sends an e-mail to the customer with an attached PDF document of the invoice. You can use the properties in the EmailInformation to customize the e-mail message on each invoice.
	 * @param int $invoiceNumber
	 * return $mixed
	 */
	public function email($invoiceNumber){
		$request = new InvoiceRequest();
        $data = $this->call('/invoices/' . $invoiceNumber . '/email', $request);
        return $data->getBody();
	}

	/**
	 * This action returns a PDF document with the current template that is used by the specific document. Note that this action also sets the property Sent as true.
	 * @param int $invoiceNumber
	 * return $mixed
	 */
	public function printPdf($invoiceNumber, $saveTo = null){
		$request = new InvoiceRequest();
		if(is_string($saveTo)){
			$data = $this->call('/invoices/' . $invoiceNumber . '/print', $request);
			$fp = fopen($saveTo, 'w');
			fwrite($fp, $data->getBody());
			fclose($fp);
			return true;
		}
		else{
			$data = $this->call('/invoices/' . $invoiceNumber . '/print', $request);
			foreach($data->getHeaders() as $key => $header){
	        	header(sprintf("%s:%s",$key,$header[0]));
	        }
	        echo $data->getBody();
	        die;
		}
	}

	/**
	 * This action returns a PDF document with the current reminder template that is used by the specific document. Note that this action also sets the property Sent as true.
	 * @param int $invoiceNumber
	 * return $mixed
	 */
	public function printReminder($invoiceNumber){
		$request = new InvoiceRequest();
        $data = $this->call('/invoices/' . $invoiceNumber . '/printreminder', $request);
        return $data->getBody();
	}

	/**
	 * This action is used to set the field Sent as true from an external system without generating a PDF.
	 * @param int $invoiceNumber
	 * return $mixed
	 */
	public function externalPrint($invoiceNumber){
		$request = new InvoiceRequest();
		$request->method = 'PUT';
        $data = $this->call('/invoices/' . $invoiceNumber . '/externalprint', $request);
        return $data->getBody();
	}

	/**
	 * This action returns a PDF document with the current template that is used by the specific document. Apart from the action print, this action doesn’t set the property Sent as true.
	 * @param int $invoiceNumber
	 * return $mixed
	 */
	public function preview($invoiceNumber){
		$request = new InvoiceRequest();
        $data = $this->call('/invoices/' . $invoiceNumber . '/preview', $request);
        foreach($data->getHeaders() as $key => $header){
        	if($key == 'Content-Disposition')
        		continue;
        	header(sprintf("%s:%s",$key,$header[0]));
        }
        echo $data->getBody();
        die;
	}
}