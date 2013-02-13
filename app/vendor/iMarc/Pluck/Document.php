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

	static protected $allow_construct;

	protected $xpath;

	static public function create($src, $quiet=TRUE)
	{
		self::$allow_construct = TRUE;
		$doc = new self();
		self::$allow_construct = FALSE;

		libxml_use_internal_errors($quiet);
		$doc->loadHTML($src);
		libxml_clear_errors();

		// register custom node class
		$doc->registerNodeClass('DOMElement', '\Pluck\Element');
		$doc->xpath = new \DOMXpath($doc);

		return $doc;
	}

	public function __construct()
	{
		if (self::$allow_construct == FALSE) {
			throw new \LogicException('Use Pluck\Document::create instead of the constructor.');
		}
	}

	public function find($selector, $context=NULL)
	{
		return new ElementList(
			$this->xpath->query(Expression::build($selector), $context)
		);
	}
}
