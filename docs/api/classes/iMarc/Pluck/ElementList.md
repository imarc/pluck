# ElementList
## The ElementList class is a container for many elements.

_(c) Copyright 2013 iMarc LLC <info@imarc.net>_.
_MIT - For full information please view the LICENSE file distributed with this source_

### Extends

`ArrayIterator`

#### Namespace

`iMarc\Pluck`

#### Imports

<table>

	<tr>
		<th>Alias</th>
		<th>Namespace / Class</th>
	</tr>
	
	<tr>
		<td>DOMNodeList</td>
		<td>DOMNodeList</td>
	</tr>
	
	<tr>
		<td>Closure</td>
		<td>Closure</td>
	</tr>
	
	<tr>
		<td>ArrayIterator</td>
		<td>ArrayIterator</td>
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

#### <span style="color:#3e6a6e;">__construct()</span>

Creates a new Element List

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
				$list
			</td>
			<td>
									DOMNodeList				
			</td>
			<td>
				The DOMNodeList to mimic
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

#### <span style="color:#3e6a6e;">attr()</span>

Gets or sets an attribute

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
			Traversable
		</dt>
		<dd>
			All attribute values as an array if getting, this object if setting
		</dd>
	
</dl>

<hr />

#### <span style="color:#3e6a6e;">each()</span>

Iterate over the internal list of elements

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
				$map
			</td>
			<td>
									Closure				
			</td>
			<td>
				The closure to iterate over the Elements with
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
			The object for method chaining
		</dd>
	
</dl>

<hr />

#### <span style="color:#3e6a6e;">merge()</span>

Merges the elements of another ElementList onto this one

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
				$list
			</td>
			<td>
									<a href="./">ElementList</a>
				
			</td>
			<td>
				The ElementList to merge
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
			The object for method chaining
		</dd>
	
</dl>

<hr />

#### <span style="color:#3e6a6e;">find()</span>

Find selector matching children of all elements in this list

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
				The selector to match against
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
			A new ElementList containing matching children of this list's elements
		</dd>
	
</dl>

<hr />

#### <span style="color:#3e6a6e;">get()</span>

Gets the element in the list at a provided index

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
				$index
			</td>
			<td>
									<a href="http://www.php.net/language.types.integer.php">int</a>
				
			</td>
			<td>
				The index position with which to get an element from
			</td>
		</tr>
			
	</tbody>
</table>

###### Returns

<dl>
	
		<dt>
			Element
		</dt>
		<dd>
			The Element if it exists, NULL otherwise
		</dd>
	
</dl>

<hr />

#### <span style="color:#3e6a6e;">text()</span>

Get the inner text of all elements in the list

###### Returns

<dl>
	
		<dt>
			array
		</dt>
		<dd>
			An array containing the returned inner text for each element
		</dd>
	
</dl>

<hr />

#### <span style="color:#3e6a6e;">remove()</span>

Remove all elements in the list from the DOM

###### Returns

<dl>
	
		<dt>
			ElementList
		</dt>
		<dd>
			The object for method chaining
		</dd>
	
</dl>

<hr />

#### <span style="color:#3e6a6e;">aggregate()</span>

Agregates the return values of a map into an array

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
				$map
			</td>
			<td>
									Closure				
			</td>
			<td>
				The closure we map to
			</td>
		</tr>
			
	</tbody>
</table>

###### Returns

<dl>
	
		<dt>
			array
		</dt>
		<dd>
			The aggregate array
		</dd>
	
</dl>

<hr />

#### <span style="color:#3e6a6e;">iterateNew()</span>

Iterates over the existing elements of a list using a map function

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
				$map
			</td>
			<td>
									Closure				
			</td>
			<td>
				The closure we map to
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
			A new element list potentially modfiied by the map
		</dd>
	
</dl>



### Inherited Methods

[`ArrayIterator::offsetExists()`](#offsetExists) [`ArrayIterator::offsetGet()`](#offsetGet) [`ArrayIterator::offsetSet()`](#offsetSet) [`ArrayIterator::offsetUnset()`](#offsetUnset) [`ArrayIterator::append()`](#append) [`ArrayIterator::getArrayCopy()`](#getArrayCopy) [`ArrayIterator::count()`](#count) [`ArrayIterator::getFlags()`](#getFlags) [`ArrayIterator::setFlags()`](#setFlags) [`ArrayIterator::asort()`](#asort) [`ArrayIterator::ksort()`](#ksort) [`ArrayIterator::uasort()`](#uasort) [`ArrayIterator::uksort()`](#uksort) [`ArrayIterator::natsort()`](#natsort) [`ArrayIterator::natcasesort()`](#natcasesort) [`ArrayIterator::unserialize()`](#unserialize) [`ArrayIterator::serialize()`](#serialize) [`ArrayIterator::rewind()`](#rewind) [`ArrayIterator::current()`](#current) [`ArrayIterator::key()`](#key) [`ArrayIterator::next()`](#next) [`ArrayIterator::valid()`](#valid) [`ArrayIterator::seek()`](#seek) 



