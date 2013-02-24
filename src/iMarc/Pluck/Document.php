<?php

namespace iMarc\Pluck;

use DOMXpath;
use DOMDocument;
use DOMElement;
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
	 * The class to use for node list
	 *
	 * @access protected
	 * @var string
	 */
	protected $nodelist_class;


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
	 * @param string $nodelist_class An override for the node list class, defaults to ElementList
	 * @return void
	 */
	public function __construct($src, $quiet = TRUE, $node_class = NULL, $nodelist_class = NULL)
	{
		parent::__construct();

		$node_class = !isset($node_class)
			? __NAMESPACE__ . '\Element'
			: $node_class;

		$this->nodelist_class = !isset($nodelist_class)
			? __NAMESPACE__ . '\ElementList'
			: $nodelist_class;

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
		return new $this->query(Expression::build($selector), $context);
	}


	/**
	 * Find elements using an xpath expression
	 *
	 * @access public
	 * @param string $query The expression with which to find elements
	 * @param DOMElement $context A starting element context
	 * @return ElementList A list of all matching elements
	 */
	public function query($expression, DOMElement $context=NULL)
	{
		$node_list = $context
			? $this->xpath->query($expression, $context)
			: $this->xpath->query($expression);

		return new $this->nodelist_class($node_list);
	}
}
