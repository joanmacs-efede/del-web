#!/bin/sh
touch /var/www/database/database.sqlite
chown www-data:www-data /var/www/database/database.sqlite
php /var/www/artisan config:cache
php /var/www/artisan route:cache
php /var/www/artisan view:cache
php /var/www/artisan migrate --force
php-fpm -D
nginx -g "daemon off;"
