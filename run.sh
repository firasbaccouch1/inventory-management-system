#!/bin/bash

docker-compose build && docker-compose up -d && sleep 30 && docker-compose exec php php artisan migrate:fresh --seed