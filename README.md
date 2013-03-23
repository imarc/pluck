# Pluck

A DOM CSS selector engine

# Installation

Pluck uses Symfony's CSS-Selector for converting CSS selectors to XPath queries.  Please ensure you have this package available.  If you're using composer your standard `composer install` should fetch it as a requirement.

# Usage

```php
$html = <<<EOD
<!DOCTYPE html>
<html>
  <body>
		<a class="button" href="#">Hello There</a>
	</body>
</html>
EOD;

$dom = new Pluck\Document($html);
$dom->find('a.button')->remove();

```

# To Do

- Finish Documentation
- Write Tests

# Credits

- While this library does not try to mimic jQuery, it will surely always be inspired by it.
