.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t docker-php-fizzbuzz .

build-container:
	docker run -dt --name docker-php-fizzbuzz -v .:/540/FizzBuzz docker-php-fizzbuzz
	docker exec docker-php-fizzbuzz composer install

start:
	docker start docker-php-fizzbuzz

test: start
	docker exec docker-php-fizzbuzz ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it docker-php-fizzbuzz /bin/bash

stop:
	docker stop docker-php-fizzbuzz

clean: stop
	docker rm docker-php-fizzbuzz
	rm -rf vendor
