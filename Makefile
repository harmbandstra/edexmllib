build:
	docker build -t edexmllib .

install:
	docker run -v ${PWD}:/var/www/html -w /var/www/html edexmllib php /usr/local/bin/composer install

update:
	docker run -v ${PWD}:/var/www/html -w /var/www/html edexmllib php /usr/local/bin/composer  update

test:
	docker run -v ${PWD}:/var/www/html -w /var/www/html edexmllib php vendor/bin/phpunit
