<?php

namespace iMarc\Pluck;

use DOMXpath;
use DOMDocument;

/**
 * The ElementList class is a container for many elements.
 *
 * @copyright (c) Copyright 2013 iMarc LLC <info@imarc.net>
 * @license MIT - For full information please view the LICENSE file distributed with this source
 *
 * @author Jeff Turcotte <jeff@imarc.net>
 * @author Matthew J. Sahagian [mjs] <matt@imarc.net>
 *
 * @todo write docs
 */
class Document extends DOMDocument
{
	protected $xpath;

	public function __construct($src, $quiet = TRUE, $node_class = NULL)
	{
		parent::__construct();

		$node_class = !isset($node_class)
			? __NAMESPACE__ . '\Element'
			: $node_class;
		
		// register custom node class
		$this->registerNodeClass('DOMElement', $node_class);

		libxml_use_internal_errors($quiet);
		$this->loadHTML($src);
		libxml_clear_errors();

		$this->xpath = new DOMXpath($this);
	}

	public function find($selector, $context=NULL)
	{
		$node_list = $context
			? $this->xpath->query(Expression::build($selector), $context)
			: $this->xpath->query(Expression::build($selector));

		return new ElementList($node_list);
	}
}
