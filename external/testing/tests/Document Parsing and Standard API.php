<?php namespace Dotink\Lab {

	use iMarc\Pluck;

	return [

		/**
		 * Setup functionality
		 */
		'setup' => function($data) {
			needs(implode(
				DIRECTORY_SEPARATOR,
				[$data['root'], 'src', 'iMarc', 'Pluck', 'Document.php']
			));

			needs(implode(
				DIRECTORY_SEPARATOR,
				[$data['root'], 'src', 'iMarc', 'Pluck', 'Element.php']
			));
		},


		/**
		 * Tests for this context
		 */
		'tests' => [

			//
			// Tests basic construction against a broken HTML5 document (will it parse!)
			//

			'Broken HTML5 [construct]' => function($data)
			{
				$doc = new Pluck\Document(file_get_contents(
					$data['support'] . DIRECTORY_SEPARATOR . 'broken_html5.html'
				));
			},

			//
			// Tests basic document structure and API for childNodes/item() against a broken
			// HTML5 document.
			//

			'Broken HTML5 [Basic Structure]' => function($data)
			{
				$doc = new Pluck\Document(file_get_contents(
					$data['support'] . DIRECTORY_SEPARATOR . 'broken_html5.html'
				));

				assert($doc->childNodes->length)->equals(2);

				$html = $doc->childNodes->item(1);

				assert($html->childNodes->length)->equals(2);
				assert($html->childNodes->item(0)->nodeName)->equals('head');
				assert($html->childNodes->item(1)->nodeName)->equals('body');
				assert($html->childNodes->item(1)->childNodes->length)->equals(1);
			}
		]
	];

}
