# `Element`
## The Element is our extended DOMElement class

_(c) Copyright 2013 iMarc LLC <info@imarc.net>_.
_MIT - For full information please view the LICENSE file distributed with this source_

### Extends

`\DOMElement`#### Authors

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
				string
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
				string
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
				mixed
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
				string
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



