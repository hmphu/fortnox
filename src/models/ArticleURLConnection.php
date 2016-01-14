<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 18:05:31
 */

namespace hmphu\fortnox\models;

/**
 * Class  ArticleURLConnection
 * @package hmphu\fortnox\models
 */
class ArticleURLConnection extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Id of the connection
     * @var integer
     */
    private $Id;
    
    /**
     * Article number
     * @var string
     */
    public $ArticleNumber;
    
    /**
     * The external URL
     * @var string
     */
    public $URLConnection;
}
