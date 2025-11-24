#!/usr/bin/env bash

echo "Running migrations..."
# --force wajib untuk production
php artisan migrate --force

echo "Clearing caches..."
php artisan optimize:clear

echo "Caching config & routes..."
# Ini penting untuk performa di Render
php artisan config:cache
php artisan event:cache
php artisan route:cache
php artisan view:cache

echo "Done!"