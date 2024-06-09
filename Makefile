install:
	composer install
brain-games:
	php ./brain-games.php
validate:
	composer validate
lint:
composer exec --verbose phpcs -- --standard=PSR12 src bin
