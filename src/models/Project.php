<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-12 19:15:21
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 10:39:49
 */

namespace hmphu\fortnox\models;

/**
 * Class FortnoxConfig
 * @package hmphu\fortnox
 */
class Project extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Comments on project 512 characters
     * @var string
     */
    public $Comments;
    
    /**
     * ContactPerson for project. 50 characters
     * @var string
     */
    public $ContactPerson;
    
    /**
     * Description of the project 50 characters
     * @var string
     */
    public $Description;
    
    /**
     * End date of the project.
     * @var date
     */
    public $EndDate;
    
    /**
     * Projectleader 50 characters
     * @var string
     */
    public $ProjectLeader;
    
    /**
     * Projectnumber. 10 characters
     * @var integer
     */
    public $ProjectNumber;
    
    /**
     * Status of the project. Can be: NOTSTARTED / ONGOING / COMPLETED
     * @var string
     */
    public $Status;
    
    /**
     * Start date of the project
     * @var date
     */
    public $StartDate;
}
