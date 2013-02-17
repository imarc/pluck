# Element
## The Element is our extended DOMElement class

_© Copyright 2013 iMarc LLC <info@imarc.net>_.
_Licensed under MIT - Please view the LICENSE file distributed with this source_

### Extends

[`DOMElement`](http://www.php.net/class.domelement.php)

#### Namespace

`iMarc\Pluck`

#### Imports

<table>

	<tr>
		<th>Alias</th>
		<th>Namespace / Class</th>
	</tr>
	
	<tr>
		<td>DOMElement</td>
		<td>DOMElement</td>
	</tr>
	
</table>

#### Authors

<table>
	<thead>
		<th>Name</th>
		<th>Handle</th>
		<th>Email</th>
	</thead>
	<tbody>
	
		<tr>
			<td>
				Jeff Turcotte
			</td>
			<td>
				
			</td>
			<td>
				jeff@imarc.net
			</td>
		</tr>
	
		<tr>
			<td>
				Matthew J. Sahagian
			</td>
			<td>
				mjs
			</td>
			<td>
				matt@imarc.net
			</td>
		</tr>
	
	</tbody>
</table>


## Methods

### Instance Methods
<hr />

#### <span style="color:#3e6a6e;">attr()</span>

Get or set an attribute on the element

###### Parameters

<table>
	<thead>
		<th>Name</th>
		<th>Type(s)</th>
		<th>Description</th>
	</thead>
	<tbody>
			
		<tr>
			<td>
				$name
			</td>
			<td>
									<a href="http://www.php.net/language.types.string.php">string</a>
				
			</td>
			<td>
				The name of the attribute
			</td>
		</tr>
					
		<tr>
			<td>
				$name
			</td>
			<td>
									<a href="http://www.php.net/language.types.string.php">string</a>
				
			</td>
			<td>
				The name of the attribute
			</td>
		</tr>
					
		<tr>
			<td>
				$value
			</td>
			<td>
									<a href="http://www.php.net/language.pseudo-types.php">mixed</a>
				
			</td>
			<td>
				The value to assign to the attribute (will be casted as a string)
			</td>
		</tr>
			
	</tbody>
</table>

###### Returns

<dl>
	
		<dt>
			mixed
		</dt>
		<dd>
			The string value of the attribute or the ELement if setting
		</dd>
	
</dl>


<hr />

#### <span style="color:#3e6a6e;">find()</span>

Find children of this element matching a CSS selector

###### Parameters

<table>
	<thead>
		<th>Name</th>
		<th>Type(s)</th>
		<th>Description</th>
	</thead>
	<tbody>
			
		<tr>
			<td>
				$selector
			</td>
			<td>
									<a href="http://www.php.net/language.types.string.php">string</a>
				
			</td>
			<td>
				A CSS selector for matching elements
			</td>
		</tr>
			
	</tbody>
</table>

###### Returns

<dl>
	
		<dt>
			ElementList
		</dt>
		<dd>
			An element list containing the elements matching the selector
		</dd>
	
</dl>


<hr />

#### <span style="color:#3e6a6e;">text()</span>

Get the text content value of this element

###### Returns

<dl>
	
		<dt>
			string
		</dt>
		<dd>
			The inner text of the element
		</dd>
	
</dl>


<hr />

#### <span style="color:#3e6a6e;">remove()</span>

Remove the element from the DOM

###### Returns

<dl>
	
		<dt>
			Element
		</dt>
		<dd>
			The element for method chaining
		</dd>
	
</dl>




### Inherited Methods

[`DOMElement::getAttribute()`](http://www.php.net/class.domelement.php#getAttribute) [`DOMElement::setAttribute()`](http://www.php.net/class.domelement.php#setAttribute) [`DOMElement::removeAttribute()`](http://www.php.net/class.domelement.php#removeAttribute) [`DOMElement::getAttributeNode()`](http://www.php.net/class.domelement.php#getAttributeNode) [`DOMElement::setAttributeNode()`](http://www.php.net/class.domelement.php#setAttributeNode) [`DOMElement::removeAttributeNode()`](http://www.php.net/class.domelement.php#removeAttributeNode) [`DOMElement::getElementsByTagName()`](http://www.php.net/class.domelement.php#getElementsByTagName) [`DOMElement::getAttributeNS()`](http://www.php.net/class.domelement.php#getAttributeNS) [`DOMElement::setAttributeNS()`](http://www.php.net/class.domelement.php#setAttributeNS) [`DOMElement::removeAttributeNS()`](http://www.php.net/class.domelement.php#removeAttributeNS) [`DOMElement::getAttributeNodeNS()`](http://www.php.net/class.domelement.php#getAttributeNodeNS) [`DOMElement::setAttributeNodeNS()`](http://www.php.net/class.domelement.php#setAttributeNodeNS) [`DOMElement::getElementsByTagNameNS()`](http://www.php.net/class.domelement.php#getElementsByTagNameNS) [`DOMElement::hasAttribute()`](http://www.php.net/class.domelement.php#hasAttribute) [`DOMElement::hasAttributeNS()`](http://www.php.net/class.domelement.php#hasAttributeNS) [`DOMElement::setIdAttribute()`](http://www.php.net/class.domelement.php#setIdAttribute) [`DOMElement::setIdAttributeNS()`](http://www.php.net/class.domelement.php#setIdAttributeNS) [`DOMElement::setIdAttributeNode()`](http://www.php.net/class.domelement.php#setIdAttributeNode) [`DOMElement::__construct()`](http://www.php.net/class.domelement.php#__construct) [`\DOMNode::insertBefore()`](http://www.php.net/class.domnode.php#insertBefore) [`\DOMNode::replaceChild()`](http://www.php.net/class.domnode.php#replaceChild) [`\DOMNode::removeChild()`](http://www.php.net/class.domnode.php#removeChild) [`\DOMNode::appendChild()`](http://www.php.net/class.domnode.php#appendChild) [`\DOMNode::hasChildNodes()`](http://www.php.net/class.domnode.php#hasChildNodes) [`\DOMNode::cloneNode()`](http://www.php.net/class.domnode.php#cloneNode) [`\DOMNode::normalize()`](http://www.php.net/class.domnode.php#normalize) [`\DOMNode::isSupported()`](http://www.php.net/class.domnode.php#isSupported) [`\DOMNode::hasAttributes()`](http://www.php.net/class.domnode.php#hasAttributes) [`\DOMNode::compareDocumentPosition()`](http://www.php.net/class.domnode.php#compareDocumentPosition) [`\DOMNode::isSameNode()`](http://www.php.net/class.domnode.php#isSameNode) [`\DOMNode::lookupPrefix()`](http://www.php.net/class.domnode.php#lookupPrefix) [`\DOMNode::isDefaultNamespace()`](http://www.php.net/class.domnode.php#isDefaultNamespace) [`\DOMNode::lookupNamespaceUri()`](http://www.php.net/class.domnode.php#lookupNamespaceUri) [`\DOMNode::isEqualNode()`](http://www.php.net/class.domnode.php#isEqualNode) [`\DOMNode::getFeature()`](http://www.php.net/class.domnode.php#getFeature) [`\DOMNode::setUserData()`](http://www.php.net/class.domnode.php#setUserData) [`\DOMNode::getUserData()`](http://www.php.net/class.domnode.php#getUserData) [`\DOMNode::getNodePath()`](http://www.php.net/class.domnode.php#getNodePath) [`\DOMNode::getLineNo()`](http://www.php.net/class.domnode.php#getLineNo) [`\DOMNode::C14N()`](http://www.php.net/class.domnode.php#C14N) [`\DOMNode::C14NFile()`](http://www.php.net/class.domnode.php#C14NFile) 



