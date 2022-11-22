destroy:
	docker-compose down --rmi all --volumes --remove-orphans
build:
	docker-compose build --no-cache --force-rm
up:
	docker-compose up -d
down:
	docker-compose down --remove-orphans
app:
	docker-compose exec app bash
mysql:
	docker-compose exec mysql bash
ps:
	docker-compose ps
app/install:
	docker-compose exec app composer install
	docker-compose exec app npm install
app/laravel-init:
	docker-compose exec app cp .env.example .env
	docker-compose exec app php artisan migrate
	docker-compose exec app php artisan db:seed
app/test:
	docker-compose exec app php artisan test
init:
	@make build
	@make up
	@make app/install
	@make app/laravel-init
lint:
	docker-compose exec app ./vendor/bin/phpstan analyse
codegen-openapi:
	cd ./front
	yarn install
	docker-compose up -d front 
	docker-compose exec front yarn codegen:openapi
validate-openapi:
	cd ./front
	yarn install
	docker-compose up -d front 
	docker-compose exec front yarn validate:openapi


