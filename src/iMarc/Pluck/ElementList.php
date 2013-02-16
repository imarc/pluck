<?php

namespace iMarc\Pluck;

use DOMNodeList;
use Closure;
use ArrayIterator;

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
class ElementList extends ArrayIterator
{
	/**
	 * Creates a new Element List
	 *
	 * @access public
	 * @param DOMNodeList $list The DOMNodeList to mimic
	 * @return void
	 */
	public function __construct(DOMNodeList $list = NULL)
	{
		if ($list === NULL) {
			$list = array();
		}

		parent::__construct(array());

		foreach($list as $element) {
			$this[] = $element;
		}
	}


	/**
	 * Gets or sets an attribute
	 *
	 * @access public
	 * @param string $name The name of the attribute
	 * @param mixed $value The value to assign to the attribute (will be casted as a string)
	 * @return Traversable All attribute values as an array if getting, this object if setting
	 */
	public function attr($name, $value = NULL)
	{
		if (func_num_args() == 1) {
			return $this->aggregate(function($item) use ($name) {
				return $item->attr($name);
			});
		}

		$this->each(function($i, $item) use ($name, $value){
			$item->attr($name, (string) $value);
		});

		return $this;
	}


	/**
	 * Iterate over the internal list of elements
	 *
	 * @access public
	 * @param Closure $map The closure to iterate over the Elements with
	 * @return ElementList The object for method chaining
	 */
	public function each(Closure $map)
	{
		$values = array();

		foreach ($this as $i => $item) {
			$values[] = $map($i, $item, $this);
		}

		return $values;
	}


	/**
	 * Merges the elements of another ElementList onto this one
	 *
	 * @access public
	 * @param ElementList $list The ElementList to merge
	 * @return ElementList The object for method chaining
	 */
	public function merge(ElementList $list)
	{
		if ($list != $this) {
			foreach ($list as $item) {
				$this[] = $item;
			}
		}

		return $this;
	}


	/**
	 * Find selector matching children of all elements in this list
	 *
	 * @access public
	 * @param string $selector The selector to match against
	 * @return ElementList A new ElementList containing matching children of this list's elements
	 */
	public function find($selector)
	{
		return $this->iterateNew(function($list, $item) use ($selector) {
			return $list->merge($item->find($selector));
		});
	}


	/**
	 * Gets the element in the list at a provided index
	 *
	 * @access public
	 * @param int $index The index position with which to get an element from
	 * @return Element The Element if it exists, NULL otherwise
	 */
	public function get($index)
	{
		if (isset($this[$index])) {
			return $this[$index];
		}

		return NULL;
	}


	/**
	 * Get the inner text of all elements in the list
	 *
	 * @access public
	 * @return array An array containing the returned inner text for each element
	 */
	public function text()
	{
		return $this->aggregate(function($item) {
			return $item->text();
		});
	}


	/**
	 * Remove all elements in the list from the DOM
	 *
	 * @access public
	 * @return ElementList The object for method chaining
	 */
	public function remove()
	{
		$this->each(function($i, $item, $list) {
			unset($list[$i]);
			return $item->remove();
		});

		return $this;
	}


	/**
	 * Agregates the return values of a map into an array
	 *
	 * @access private
	 * @param Closure $map The closure we map to
	 * @return array The aggregate array
	 */
	private function aggregate(Closure $map)
	{
		$values = array();

		foreach ($this as $item) {
			$value = $map($item);

			if (is_array($value)) {
				$values = array_merge($values, $value);
			} else {
				$values[] = $value;
			}
		}

		return $values;
	}


	/**
	 * Iterates over the existing elements of a list using a map function
	 *
	 * @access private
	 * @param Closure $map The closure we map to
	 * @return ElementList A new element list potentially modfiied by the map
	 */
	private function iterateNew(Closure $map)
	{
		$list = new self();

		foreach ($this as $item) {
			$map($list, $item);
		}

		return $list;
	}
}

