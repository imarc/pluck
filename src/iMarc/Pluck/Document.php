<?php

namespace iMarc\Pluck;

use DOMXpath;
use DOMDocument;
use DOMNode;

/**
 * The ElementList class is a container for many elements.
 *
 * @copyright © Copyright 2013 iMarc LLC <info@imarc.net>
 * @license Licensed under MIT - Please view the LICENSE file distributed with this source
 *
 * @author Jeff Turcotte <jeff@imarc.net>
 * @author Matthew J. Sahagian [mjs] <matt@imarc.net>
 *
 * @todo write docs
 */
class Document extends DOMDocument
{
	/**
	 * The xpath object stored for querying
	 *
	 * @access protected
	 * @var DOMXPath
	 */
	protected $xpath;


	/**
	 * Overload the normal DOMDocument constructor.
	 *
	 * We are mostly interested in overloading so that we can control parse errors, but also to
	 * ensure each instance is using our custom element.
	 *
	 * @access public
	 * @param string $src The HTML code which we will parse into DOM objects
	 * @param boolean $quiet Whether or not we should keep quiet about parsing errors
	 * @param string $node_class An override for the node class, defaults to Element
	 * @return void
	 */
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


	/**
	 * Find elements using a CSS3 selector
	 *
	 * @access public
	 * @param string $selector The CSS3 selector with which to find elements
	 * @param DOMElement $context A starting element context (find matching children only)
	 * @return ElementList A list of all matching elements
	 */
	public function find($selector, DOMElement $context=NULL)
	{
		$node_list = $context
			? $this->xpath->query(Expression::build($selector), $context)
			: $this->xpath->query(Expression::build($selector));

		return new ElementList($node_list);
	}
}
