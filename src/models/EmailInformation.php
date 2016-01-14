<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 10:12:35
 */

namespace hmphu\fortnox\models;

/**
 * Class EmailInformation
 * @package hmphu\fortnox\models
 */
class EmailInformation extends BaseModel
{
    
    /**
     * Customer e-mail address
     * @var string
     */
    public $EmailAddressTo;
    
    /**
     * Customer e-mail address copy
     * @var string
     */
    public $EmailAddressCC;
    
    /**
     * Customer e-mail address blind carbon copy
     * @var string
     */
    public $EmailAddressBCC;
    
    /**
     * Subject of e-mail
     * {no}/{-} in body = documentnumber
     * {name} =  customer name
     * @var string
     */
    public $EmailSubject;
    
    /**
     * Body of e-mail.
     * {no}/{-} in body = documentnumber
     * {name} =  customer name
     * @var string
     */
    public $EmailBody;
}
