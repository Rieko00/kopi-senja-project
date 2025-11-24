#!/usr/bin/env bash

echo "Running composer install..."
composer install --no-dev --prefer-dist --optimize-autoloader

echo "Generating app key..."
php artisan key:generate

echo "Running migrations..."
php artisan migrate --force

# Membersihkan cache
php artisan view:clear
php artisan cache:clear
php artisan config:clear
