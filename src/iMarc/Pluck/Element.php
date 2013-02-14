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
class Element extends \DOMElement
{
	/**
	 * Get or set an attribute on the element
	 *
	 * @access public
	 * @param string $name The name of the attribute
	 * @param string $name The name of the attribute
	 * @param mixed $value The value to assign to the attribute (will be casted as a string)
	 * @return mixed The string value of the attribute or the ELement if setting
	 */
	public function attr($name, $value = NULL)
	{
		if (func_num_args() == 1) {
			return $this->hasAttribute($name)
				? $this->getAttribute($name)
				: NULL;
		}

		$this->setAttribute($name, $value);

		return $this;
	}


	/**
	 * Find children of this element matching a CSS selector
	 *
	 * @access public
	 * @param string $selector A CSS selector for matching elements
	 * @return ElementList An element list containing the elements matching the selector
	 */
	public function find($selector)
	{
		return $this->ownerDocument->find(
			$selector, $this
		);
	}


	/**
	 * Get the text content value of this element
	 *
	 * @access public
	 * @return string The inner text of the element
	 */
	public function text()
	{
		return $this->textContent;
	}


	/**
	 * Remove the element from the DOM
	 *
	 * @access public
	 * @return Element The element for method chaining
	 */
	public function remove()
	{
		$this->parentNode->removeChild($this);

		return $this;
	}
}

