# Using `ElementList`s

The [`ElementList`](../api/classes/iMarc/Pluck/ElementList) class is essentially a container for a number of elements.  Unlike traditional node lists, it is not constrained to a single document.  That is to say, it is possible for it to have many [`Element`](../api/classes/iMarc/Pluck/Element)s from many [`Document`](../api/classes/iMarc/Pluck/Document)s.

## Iteration

You can do simple iteration using the [`::each()`](../api/classes/iMarc/Pluck/ElementList#each) method.

```php
$elements->each(function($i, $element) {
	echo $element->text();
});
```

In the above example the `$i` variable inside the closure will represent the element's index in the list while the `$element` will be the actual [`Element`](../api/classes/iMarc/Pluck/Element) object.

You can use the full element list inside the closure in two ways:

### Importing it with `use()`

_Removes the previous element if it has the same text content_

```
$elements->each(function($i, $element) use ($elements) {
	if ($elements->get($i - 1)->text() == $element->text()) {
		$element->remove();
	}
});
```

### Taking in a third argument

_Removes all links to elements by id_

```
$elements->each(function($i, $element, $list) {
	$id = $element->attr('id');

	if ($id) {
		$list->find('href=[#' . $id . ']')->remove();
	}
});
```

## Manipulation

Calling [`::remove()`](../api/classes/iMarc/Pluck/ElementList#remove) on a list will remove all elements in that list from their respective documents.

## Inspection

All inspection methods like [`::attr()`](../api/classes/iMarc/Pluck/ElementList#attr) or [`::text()`](../api/classes/iMarc/Pluck/ElementList#text) will return arrays when called on a list.

```
$secure_links = array();

foreach ($document->find('a.button')->attr('href') as $link) {
	if (strpos($link, 'https://') === 0) {
		$secure_links[] = $link;
	}
}
```


