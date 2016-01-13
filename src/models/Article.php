<?php
/**
 * @Author: Phu Hoang
 * @Date:   2016-01-13 10:37:45
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-13 10:42:19
 */
 
 namespace hmphu\fortnox\models;

/**
 * Class Article
 * @package hmphu\fortnox\models
 */
class Article extends BaseModel
{
	/**
	 * he type of house work. 
	 * Can be CONSTRUCTION,ELECTRICITY,GLASSMETALWORK,GROUNDDRAINAGEWORK,MASONRY,PAINTINGWALLPAPERING,HVAC,
	 * CLEANING,TEXTILECLOTHING,COOKING,SNOWPLOWING,GARDENING,BABYSITTING,OTHERCARE,TUTORING,OTHERCOSTS 
	 * or empty.
	 */
	const HOUSEWORKTYPE_CONSTRUCTION = 'CONSTRUCTION';
	const HOUSEWORKTYPE_ELECTRICITY = 'ELECTRICITY';
	const HOUSEWORKTYPE_GLASSMETALWORK = 'GLASSMETALWORK';
	const HOUSEWORKTYPE_GROUNDDRAINAGEWORK = 'GROUNDDRAINAGEWORK';
	const HOUSEWORKTYPE_MASONRY = 'MASONRY';
	const HOUSEWORKTYPE_PAINTINGWALLPAPERING = 'PAINTINGWALLPAPERING';
	const HOUSEWORKTYPE_HVAC = 'HVAC';
	const HOUSEWORKTYPE_CLEANING = 'CLEANING';
	const HOUSEWORKTYPE_TEXTILECLOTHING = 'TEXTILECLOTHING';
	const HOUSEWORKTYPE_COOKING = 'COOKING';
	const HOUSEWORKTYPE_SNOWPLOWING = 'SNOWPLOWING';
	const HOUSEWORKTYPE_GARDENING = 'GARDENING';
	const HOUSEWORKTYPE_BABYSITTING = 'BABYSITTING';
	const HOUSEWORKTYPE_OTHERCARE = 'OTHERCARE';
	const HOUSEWORKTYPE_TUTORING = 'TUTORING';
	const HOUSEWORKTYPE_OTHERCOSTS = 'OTHERCOSTS';
	const HOUSEWORKTYPE_EMPTY = '';

	/**
	 * The type of the article. Can be STOCK or SERVICE.
	 */
	const TYPE_STOCK = 'STOCK';
	const TYPE_SERVICE = 'SERVICE';

	/**
	 * @var string  The description of the article.
	 */
	public $Description;

	function __construct($data){
		if(is_string($data)){
 			$this->Description = $data;
 		}
 		else{
 			parent::__construct($data);
 		}
	}
}