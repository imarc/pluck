<?php

$element_list->each(function($i, $element) {
	printf(
		'The element at %d has an id of "%s"',
		$i, $element->attr('id')
	);
});
