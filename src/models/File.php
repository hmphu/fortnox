<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:35:10
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 18:00:32
 */

namespace hmphu\fortnox\models;

/**
 * Class File
 * @package hmphu\fortnox\models
 */
class File extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Comments
     * @var string
     */
    private $Comments;
    
    /**
     * Id of the file
     * @var string
     */
    private $Id;
    
    /**
     * Name of the file
     * @var string
     */
    private $Name;
    
    /**
     * Path to the file
     * @var string
     */
    private $Path;
    
    /**
     * Size(in bytes) of the file
     * @var string
     */
    private $Size;
}
