<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-12 18:19:46
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-12 19:07:35
 */
 
namespace hmphu\fortnox\request;

/**
 * Class CustomerRequest
 * @package hmphu\fortnox\request
 */
class Exception extends \Exception
{
	private $_descriptions = array(
        '1000003' => 'Something went wrong on our end, please contact us.',
		'1000030' => 'The provided response type(Accept) was invalid.',
		'1000031' => 'The provided content type was invalid.',
		'2000106' => 'The value needs to be alphanumeric.',
		'2000108' => 'The value needs to be numeric.',
		'2000134' => 'The value needs to be boolean',
		'2000310' => 'The Client-Secret or the Access-Token is either missing or is incorrect.',
		'2000311' => 'The Client-Secret or the Access-Token is either missing or is incorrect.',
		'2000359' => 'The value contains invalid characters.',
		'2000588' => 'A parameter is invalid. Read more about parameters.',
		'2000729' => 'A valid identifier was not provided.',
		'2001103' => 'The requested Fortnox account does not have a license to use the API',
		'2001392' => 'The request body was empty or contained incorrect data.',
		'2001740' => 'The XML object contained an error.',
		'2002115' => 'The JSON object contained an error.',
		'2001304' => 'Could not find Account',
		'2001399' => 'Invalid Field name',
		'2001101' => 'There is no active licens for the desired scope.',
		'2003095' => 'Account is missing for Purchase SE reversed tax liability',
		'2000755' => 'Supplier invoice does not balance',
	);

	public function __construct($message = null, $code = 0, \Exception $previous = null){
		$this->message = $message;
		if(array_key_exists($code, $this->_descriptions)){
			$this->message .= ' - '.$this->_descriptions[$code];
		}
		$this->code = $code;
		$this->previous = $previous;
	}
}
