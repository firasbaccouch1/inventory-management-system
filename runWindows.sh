#!/bin/bash
#winpty is an interactive tty terminal emulator. 
winpty docker-compose build && winpty docker-compose up -d && sleep 30 && winpty docker-compose exec php php artisan migrate:fresh --seed