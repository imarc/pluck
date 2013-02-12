# Pluck

A DOM CSS selector engine

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

$dom = Pluck\Document::create($doc);
$dom->find('a.button')->remove();

```

# Credits

- Many of the regexps for CSS to Xpath conversion were authored by T.J. Holowaychuck for his [php-selector](https://github.com/imarc/php-selector) library.
- While this library does not try to mimic jQuery, it will surely always serve as inspiration.
