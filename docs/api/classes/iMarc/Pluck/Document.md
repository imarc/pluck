# Document
## The ElementList class is a container for many elements.

_© Copyright 2013 iMarc LLC <info@imarc.net>_.
_Licensed under MIT - Please view the LICENSE file distributed with this source_

### Extends

[`DOMDocument`](http://www.php.net/class.domdocument.php)

#### Namespace

`iMarc\Pluck`

#### Imports

<table>

	<tr>
		<th>Alias</th>
		<th>Namespace / Class</th>
	</tr>
	
	<tr>
		<td>DOMXpath</td>
		<td>DOMXpath</td>
	</tr>
	
	<tr>
		<td>DOMDocument</td>
		<td>DOMDocument</td>
	</tr>
	
	<tr>
		<td>DOMElement</td>
		<td>DOMElement</td>
	</tr>
	
	<tr>
		<td>DOMNode</td>
		<td>DOMNode</td>
	</tr>
	
	<tr>
		<td>CssSelector</td>
		<td>Symfony\Component\CssSelector\CssSelector</td>
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

## Properties

### Instance Properties
#### <span style="color:#6a6e3d;">$xpath</span>

The xpath object stored for querying

#### <span style="color:#6a6e3d;">$nodelist_class</span>

The class to use for node list




## Methods

### Instance Methods
<hr />

#### <span style="color:#3e6a6e;">__construct()</span>

Overload the normal DOMDocument constructor.

##### Details

We are mostly interested in overloading so that we can control parse errors, but also to
ensure each instance is using our custom element.

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
				$src
			</td>
			<td>
									<a href="http://www.php.net/language.types.string.php">string</a>
				
			</td>
			<td>
				The HTML code which we will parse into DOM objects
			</td>
		</tr>
					
		<tr>
			<td>
				$quiet
			</td>
			<td>
									<a href="http://www.php.net/language.types.boolean.php">boolean</a>
				
			</td>
			<td>
				Whether or not we should keep quiet about parsing errors
			</td>
		</tr>
					
		<tr>
			<td>
				$node_class
			</td>
			<td>
									<a href="http://www.php.net/language.types.string.php">string</a>
				
			</td>
			<td>
				An override for the node class, defaults to Element
			</td>
		</tr>
					
		<tr>
			<td>
				$nodelist_class
			</td>
			<td>
									<a href="http://www.php.net/language.types.string.php">string</a>
				
			</td>
			<td>
				An override for the node list class, defaults to ElementList
			</td>
		</tr>
			
	</tbody>
</table>

###### Returns

<dl>
	
		<dt>
			void
		</dt>
		<dd>
			Provides no return value.
		</dd>
	
</dl>


<hr />

#### <span style="color:#3e6a6e;">find()</span>

Find elements using a CSS3 selector

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
				The CSS3 selector with which to find elements
			</td>
		</tr>
					
		<tr>
			<td>
				$context
			</td>
			<td>
									<a href="http://www.php.net/class.domelement.php">DOMElement</a>
				
			</td>
			<td>
				A starting element context (find matching children only)
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
			A list of all matching elements
		</dd>
	
</dl>


<hr />

#### <span style="color:#3e6a6e;">query()</span>

Find elements using an xpath expression

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
				$query
			</td>
			<td>
									<a href="http://www.php.net/language.types.string.php">string</a>
				
			</td>
			<td>
				The expression with which to find elements
			</td>
		</tr>
					
		<tr>
			<td>
				$context
			</td>
			<td>
									<a href="http://www.php.net/class.domelement.php">DOMElement</a>
				
			</td>
			<td>
				A starting element context
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
			A list of all matching elements
		</dd>
	
</dl>




### Inherited Methods

[`DOMDocument::createElement()`](http://www.php.net/class.domdocument.php#createElement) [`DOMDocument::createDocumentFragment()`](http://www.php.net/class.domdocument.php#createDocumentFragment) [`DOMDocument::createTextNode()`](http://www.php.net/class.domdocument.php#createTextNode) [`DOMDocument::createComment()`](http://www.php.net/class.domdocument.php#createComment) [`DOMDocument::createCDATASection()`](http://www.php.net/class.domdocument.php#createCDATASection) [`DOMDocument::createProcessingInstruction()`](http://www.php.net/class.domdocument.php#createProcessingInstruction) [`DOMDocument::createAttribute()`](http://www.php.net/class.domdocument.php#createAttribute) [`DOMDocument::createEntityReference()`](http://www.php.net/class.domdocument.php#createEntityReference) [`DOMDocument::getElementsByTagName()`](http://www.php.net/class.domdocument.php#getElementsByTagName) [`DOMDocument::importNode()`](http://www.php.net/class.domdocument.php#importNode) [`DOMDocument::createElementNS()`](http://www.php.net/class.domdocument.php#createElementNS) [`DOMDocument::createAttributeNS()`](http://www.php.net/class.domdocument.php#createAttributeNS) [`DOMDocument::getElementsByTagNameNS()`](http://www.php.net/class.domdocument.php#getElementsByTagNameNS) [`DOMDocument::getElementById()`](http://www.php.net/class.domdocument.php#getElementById) [`DOMDocument::adoptNode()`](http://www.php.net/class.domdocument.php#adoptNode) [`DOMDocument::normalizeDocument()`](http://www.php.net/class.domdocument.php#normalizeDocument) [`DOMDocument::renameNode()`](http://www.php.net/class.domdocument.php#renameNode) [`DOMDocument::load()`](http://www.php.net/class.domdocument.php#load) [`DOMDocument::save()`](http://www.php.net/class.domdocument.php#save) [`DOMDocument::loadXML()`](http://www.php.net/class.domdocument.php#loadXML) [`DOMDocument::saveXML()`](http://www.php.net/class.domdocument.php#saveXML) [`DOMDocument::validate()`](http://www.php.net/class.domdocument.php#validate) [`DOMDocument::xinclude()`](http://www.php.net/class.domdocument.php#xinclude) [`DOMDocument::loadHTML()`](http://www.php.net/class.domdocument.php#loadHTML) [`DOMDocument::loadHTMLFile()`](http://www.php.net/class.domdocument.php#loadHTMLFile) [`DOMDocument::saveHTML()`](http://www.php.net/class.domdocument.php#saveHTML) [`DOMDocument::saveHTMLFile()`](http://www.php.net/class.domdocument.php#saveHTMLFile) [`DOMDocument::schemaValidate()`](http://www.php.net/class.domdocument.php#schemaValidate) [`DOMDocument::schemaValidateSource()`](http://www.php.net/class.domdocument.php#schemaValidateSource) [`DOMDocument::relaxNGValidate()`](http://www.php.net/class.domdocument.php#relaxNGValidate) [`DOMDocument::relaxNGValidateSource()`](http://www.php.net/class.domdocument.php#relaxNGValidateSource) [`DOMDocument::registerNodeClass()`](http://www.php.net/class.domdocument.php#registerNodeClass) [`DOMNode::insertBefore()`](http://www.php.net/class.domnode.php#insertBefore) [`DOMNode::replaceChild()`](http://www.php.net/class.domnode.php#replaceChild) [`DOMNode::removeChild()`](http://www.php.net/class.domnode.php#removeChild) [`DOMNode::appendChild()`](http://www.php.net/class.domnode.php#appendChild) [`DOMNode::hasChildNodes()`](http://www.php.net/class.domnode.php#hasChildNodes) [`DOMNode::cloneNode()`](http://www.php.net/class.domnode.php#cloneNode) [`DOMNode::normalize()`](http://www.php.net/class.domnode.php#normalize) [`DOMNode::isSupported()`](http://www.php.net/class.domnode.php#isSupported) [`DOMNode::hasAttributes()`](http://www.php.net/class.domnode.php#hasAttributes) [`DOMNode::compareDocumentPosition()`](http://www.php.net/class.domnode.php#compareDocumentPosition) [`DOMNode::isSameNode()`](http://www.php.net/class.domnode.php#isSameNode) [`DOMNode::lookupPrefix()`](http://www.php.net/class.domnode.php#lookupPrefix) [`DOMNode::isDefaultNamespace()`](http://www.php.net/class.domnode.php#isDefaultNamespace) [`DOMNode::lookupNamespaceUri()`](http://www.php.net/class.domnode.php#lookupNamespaceUri) [`DOMNode::isEqualNode()`](http://www.php.net/class.domnode.php#isEqualNode) [`DOMNode::getFeature()`](http://www.php.net/class.domnode.php#getFeature) [`DOMNode::setUserData()`](http://www.php.net/class.domnode.php#setUserData) [`DOMNode::getUserData()`](http://www.php.net/class.domnode.php#getUserData) [`DOMNode::getNodePath()`](http://www.php.net/class.domnode.php#getNodePath) [`DOMNode::getLineNo()`](http://www.php.net/class.domnode.php#getLineNo) [`DOMNode::C14N()`](http://www.php.net/class.domnode.php#C14N) [`DOMNode::C14NFile()`](http://www.php.net/class.domnode.php#C14NFile) 



