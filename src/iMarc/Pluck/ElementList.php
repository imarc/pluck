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
class ElementList extends \ArrayIterator {
	public function __construct(\DOMNodeList $list)
	{
		$elements = array();
		foreach($list as $element) {
			array_push($elements, $element);
		}
		parent::__construct($elements);
	}

	public function get($index)
	{
		if (isset($this[$index])) {
			return $this[$index];
		}
	}

	public function __call($method, $args=array())
	{
		foreach($this as $element) {
			call_user_func_array(
				array($element, $method), $args
			);
		}
	}
}

