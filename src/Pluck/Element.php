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
class Element extends \DOMElement {
	public function find($selector)
	{
		return $this->ownerDocument->find(
			$selector, $this
		);
	}

	public function text()
	{
		return $this->textContent;
	}

	public function remove()
	{
		$this->parentNode->removeChild($this);
	}
}

