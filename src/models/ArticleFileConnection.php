<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 18:03:43
 */

namespace hmphu\fortnox\models;

/**
 * Class  ArticleFileConnection
 * @package hmphu\fortnox\models
 */
class ArticleFileConnection extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Id of the file
     * @var string
     */
    public $FileId;
    
    /**
     * Article number
     * @var string
     */
    public $ArticleNumber;
}
