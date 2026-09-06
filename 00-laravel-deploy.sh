#!/usr/bin/env bash
set -e

echo "Installing composer dependencies..."
composer install --no-dev --optimize-autoloader --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Caching views..."
php artisan view:cache

# No database yet, so no `php artisan migrate` step.
# Add it back here once you introduce a real database:
#   php artisan migrate --force
