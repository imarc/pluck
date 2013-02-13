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
 * @author TJ Holowaychuk <tj@vision-media.ca>
 * @author Jeff Turcotte <jeff@imarc.net>
 *
 * @todo write docs
 */
class Expression {
	static public function build($selector) {
		$selector = 'descendant-or-self::' . $selector;
		// ,
		$selector = preg_replace('/\s*,\s*/', '|descendant-or-self::', $selector);
		// :button, :submit, etc
		$selector = preg_replace('/:(button|submit|file|checkbox|radio|image|reset|text|password)/', 'input[@type="\1"]', $selector);
		// [id]
		$selector = preg_replace('/\[(\w+)\]/', '*[@\1]', $selector);
		// foo[id=foo]
		$selector = preg_replace('/\[(\w+)=[\'"]?(.*?)[\'"]?\]/', '[@\1="\2"]', $selector);
		// [id=foo]
		$selector = str_replace(':[', ':*[', $selector);
		// div#foo
		$selector = preg_replace('/([\w\-]+)\#([\w\-]+)/', '\1[@id="\2"]', $selector);
		// #foo
		$selector = preg_replace('/\#([\w\-]+)/', '*[@id="\1"]', $selector);
		// div.foo
		$selector = preg_replace('/([\w\-]+)\.([\w\-]+)/', '\1[contains(@class,"\2")]', $selector);
		// .foo
		$selector = preg_replace('/\.([\w\-]+)/', '*[contains(@class,"\1")]', $selector);
		// div:first-child
		$selector = preg_replace('/([\w\-]+):first-child/', '*/\1[position()=1]', $selector);
		// div:last-child
		$selector = preg_replace('/([\w\-]+):last-child/', '*/\1[position()=last()]', $selector);
		// :first-child
		$selector = str_replace(':first-child', '*/*[position()=1]', $selector);
		// :last-child
		$selector = str_replace(':last-child', '*/*[position()=last()]', $selector);
		// div:nth-child
		$selector = preg_replace('/([\w\-]+):nth-child\((\d+)\)/', '*/\1[position()=\2]', $selector);
		// :nth-child
		$selector = preg_replace('/:nth-child\((\d+)\)/', '*/*[position()=\1]', $selector);
		// :contains(Foo)
		$selector = preg_replace('/([\w\-]+):contains\((.*?)\)/', '\1[contains(string(.),"\2")]', $selector);
		// >
		$selector = preg_replace('/\s*>\s*/', '/', $selector);
		// ~
		$selector = preg_replace('/\s*~\s*/', '/following-sibling::', $selector);
		// + 
		$selector = preg_replace('/\s*\+\s*([\w\-]+)/', '/following-sibling::\1[position()=1]', $selector);
		// ' '
		$selector = preg_replace('/\s+/', '/descendant::', $selector);

		$selector = str_replace(']*', ']', $selector);
		$selector = str_replace(']/*', ']', $selector);

		return $selector;
	}
}

