PHP := $(shell which php)

seed:
	$(PHP) artisan db:seed

migrate:
	$(PHP) artisan migrate
