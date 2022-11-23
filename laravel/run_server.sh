#!/bin/sh
sleep 30;
service cron restart
php artisan migrate;
php artisan cache:clear
php-fpm
