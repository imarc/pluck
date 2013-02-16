# Element
## The Element is our extended DOMElement class

_(c) Copyright 2013 iMarc LLC <info@imarc.net>_.
_MIT - For full information please view the LICENSE file distributed with this source_

### Extends

`DOMElement`

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

[`DOMElement::getAttribute()`](#getAttribute) [`DOMElement::setAttribute()`](#setAttribute) [`DOMElement::removeAttribute()`](#removeAttribute) [`DOMElement::getAttributeNode()`](#getAttributeNode) [`DOMElement::setAttributeNode()`](#setAttributeNode) [`DOMElement::removeAttributeNode()`](#removeAttributeNode) [`DOMElement::getElementsByTagName()`](#getElementsByTagName) [`DOMElement::getAttributeNS()`](#getAttributeNS) [`DOMElement::setAttributeNS()`](#setAttributeNS) [`DOMElement::removeAttributeNS()`](#removeAttributeNS) [`DOMElement::getAttributeNodeNS()`](#getAttributeNodeNS) [`DOMElement::setAttributeNodeNS()`](#setAttributeNodeNS) [`DOMElement::getElementsByTagNameNS()`](#getElementsByTagNameNS) [`DOMElement::hasAttribute()`](#hasAttribute) [`DOMElement::hasAttributeNS()`](#hasAttributeNS) [`DOMElement::setIdAttribute()`](#setIdAttribute) [`DOMElement::setIdAttributeNS()`](#setIdAttributeNS) [`DOMElement::setIdAttributeNode()`](#setIdAttributeNode) [`DOMElement::__construct()`](#__construct) [`\DOMNode::insertBefore()`](#insertBefore) [`\DOMNode::replaceChild()`](#replaceChild) [`\DOMNode::removeChild()`](#removeChild) [`\DOMNode::appendChild()`](#appendChild) [`\DOMNode::hasChildNodes()`](#hasChildNodes) [`\DOMNode::cloneNode()`](#cloneNode) [`\DOMNode::normalize()`](#normalize) [`\DOMNode::isSupported()`](#isSupported) [`\DOMNode::hasAttributes()`](#hasAttributes) [`\DOMNode::compareDocumentPosition()`](#compareDocumentPosition) [`\DOMNode::isSameNode()`](#isSameNode) [`\DOMNode::lookupPrefix()`](#lookupPrefix) [`\DOMNode::isDefaultNamespace()`](#isDefaultNamespace) [`\DOMNode::lookupNamespaceUri()`](#lookupNamespaceUri) [`\DOMNode::isEqualNode()`](#isEqualNode) [`\DOMNode::getFeature()`](#getFeature) [`\DOMNode::setUserData()`](#setUserData) [`\DOMNode::getUserData()`](#getUserData) [`\DOMNode::getNodePath()`](#getNodePath) [`\DOMNode::getLineNo()`](#getLineNo) [`\DOMNode::C14N()`](#C14N) [`\DOMNode::C14NFile()`](#C14NFile) 



