DOCKER_COMPOSE = docker-compose -f docker-compose.yml

.PHONY: build up down

build:
	$(DOCKER_COMPOSE) build --no-cache

up:
	$(DOCKER_COMPOSE) up -d

down:
	$(DOCKER_COMPOSE) down
