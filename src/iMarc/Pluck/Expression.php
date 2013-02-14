<?php

namespace iMarc\Pluck;

/**
 * The Expression class is responsible for CSS to XPath Translations
 *
 * @copyright (c) Copyright 2013 iMarc LLC <info@imarc.net>
 * @license MIT - For full information please view the LICENSE file distributed with this source
 *
 * @author TJ Holowaychuk <tj@vision-media.ca>
 * @author Jeff Turcotte <jeff@imarc.net>
 * @author Matthew J. Sahagian [mjs] <matt@imarc.net>
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
		$selector = preg_replace('/([\w\-]+):nth-child\((\d+|odd|even)\)/', '*/\1[position()=\2]', $selector);
		// :nth-child
		$selector = preg_replace('/:nth-child\((\d+|odd|even)\)/', '*/*[position()=\1]', $selector);
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

		//
		// Below you will find only those translations which need to add spaces.  We hold these off
		// until the end to ensure spaces are not translated to standard descendent children
		// selectors
		//

		//:nth-child(odd|even)
		$selector = str_replace('[position()=odd]',  '[position() mod 2 = 1 and position() > 1]', $selector);
		$selector = str_replace('[position()=even]', '[position() mod 2 = 0]', $selector);

		return $selector;
	}
}

