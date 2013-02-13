<?php namespace Dotink\Lab {

	use iMarc\Pluck;

	const DOS = 'descendant-or-self';

	return [

		/**
		 * Setup functionality
		 */
		'setup' => function($data) {
			needs(implode(
				DIRECTORY_SEPARATOR,
				[$data['root'], 'src', 'iMarc', 'Pluck', 'Expression.php']
			));

		},


		/**
		 * Tests for this context
		 */
		'tests' => [

			'Simple Element Selector' => function($data)
			{
				assert('iMarc\Pluck\Expression::build')
					-> with ('div')  -> equals (DOS . '::div')
					-> with ('body') -> equals (DOS . '::body')
				;
			},

			'Simple ID Selector' => function($data)
			{
				assert('iMarc\Pluck\Expression::build')
					-> with ('#test') -> equals (DOS . '::*[@id="test"]')
					-> with ('#whoa') -> equals (DOS . '::*[@id="whoa"]')
				;
			},

			'Simple Class Selector' => function($data)
			{
				assert('iMarc\Pluck\Expression::build')
					-> with ('.header') -> equals (DOS . '::*[contains(@class,"header")]')
					-> with ('.footer') -> equals (DOS . '::*[contains(@class,"footer")]')
				;
			},
		]
	];

}
