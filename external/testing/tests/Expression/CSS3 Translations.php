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

			'Nth Child Selector' => function($data)
			{
				assert('iMarc\Pluck\Expression::build')
					-> with (':nth-child(3)')       -> equals (DOS . '::*/*[position()=3]')
					-> with ('div:nth-child(odd)')  -> equals (DOS . '::*/div[position() mod 2 = 1 and position() > 1]')
					-> with ('div:nth-child(even)') -> equals (DOS . '::*/div[position() mod 2 = 0]')
				;
			},
		]
	];

}
