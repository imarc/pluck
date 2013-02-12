<?php
/*
 * This file is part of the Pluck package.
 *
 * (c) Copyright 2013 iMarc LLC <info@imarc.net>
 *
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Pluck;

/**
 * @author Jeff Turcotte <jeff@imarc.net>
 *
 * @todo write docs
 */
class Document extends \DOMDocument {

	static protected $in_create;
	protected $xpath;

	static public function create($html)
	{
		self::$in_create = TRUE;

		$doc = new self();

		libxml_use_internal_errors(TRUE);
		$doc->loadHTML($html);
		libxml_clear_errors();
		
		// register custom node class
		$doc->registerNodeClass(
			'DOMElement', '\Selector\Element'
		);

		$doc->xpath = new \DOMXpath($doc);

		self::$in_create = FALSE;

		return $doc;
	}

	public function __construct()
	{
		if (self::$in_create == FALSE) {
			throw new \Exception('Please use ::create instead of the constructor.');
		}
	}

	public function find($selector, $context=NULL)
	{
		return new ElementList(
			$this->xpath->query(Expression::build($selector))
		);
	}
}
