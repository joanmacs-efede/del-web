#!/bin/sh
php /var/www/artisan config:cache
php /var/www/artisan route:cache
php /var/www/artisan view:cache
php-fpm -D
nginx -g "daemon off;"
