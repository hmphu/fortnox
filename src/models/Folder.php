<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:35:10
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-14 18:29:48
 */

namespace hmphu\fortnox\models;

/**
 * Class Folder
 * @package hmphu\fortnox\models
 */
class Folder extends BaseModel
{
    
    /**
     * Direct URL to the record
     * @var string
     */
    private $Url;
    
    /**
     * Unique email for the folder
     * @var string
     */
    private $Email;
    
    /**
     * List of files
     * @var object[]
     */
    private $Files = [];
    
    /**
     * List of folders
     * @var object[]
     */
    private $Folders = [];
    
    /**
     * Id of the folder
     * @var string
     */
    private $Id;
    
    /**
     * Name of the folder
     * @var string
     */
    public $Name;

    public function __construct1(array $data) {
		parent::__construct1($data);
		
		$files = [];
		foreach($this->Files as $file){
			$files = new Folder($file);
		}
		$this->Files = $files;

		$folders = [];
		foreach($this->Folders as $folder){
			$folders = new Folder($folder);
		}
		$this->Folders = $folders;
	}
}
