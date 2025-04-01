.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t docker-php-lista-compra .

build-container:
	docker run -dt --name docker-php-lista-compra -v .:/540/Ohce docker-php-lista-compra
	docker exec docker-php-lista-compra composer install

start:
	docker start docker-php-lista-compra

test: start
	docker exec docker-php-lista-compra ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it docker-php-lista-compra /bin/bash

stop:
	docker stop docker-php-lista-compra

clean: stop
	docker rm docker-php-lista-compra
	rm -rf vendor
