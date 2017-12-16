PHP := $(shell which php)

migrate:
	$(PHP) artisan migrate

migrate/refresh:
	$(PHP) artisan migrate:refresh

seed:
	$(PHP) artisan db:seed
