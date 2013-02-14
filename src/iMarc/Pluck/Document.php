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
namespace iMarc\Pluck;

/**
 * @author Jeff Turcotte <jeff@imarc.net>
 *
 * @todo write docs
 */
class Document extends \DOMDocument {

	protected $xpath;

	public function __construct($src, $quiet = TRUE, $node_class = NULL)
	{
		parent::__construct();

		$node_class = !isset($node_class)
			? __NAMESPACE__ . '\Element'
			: $node_class;

		$this->registerNodeClass('DOMElement', $node_class);

		libxml_use_internal_errors($quiet);
		$this->loadHTML($src);
		libxml_clear_errors();

		// register custom node class
		$this->xpath = new \DOMXpath($this);
	}

	public function find($selector, $context=NULL)
	{
		return new ElementList(
			$this->xpath->query(Expression::build($selector), $context)
		);
	}
}
