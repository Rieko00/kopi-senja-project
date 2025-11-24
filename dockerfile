FROM richarvey/nginx-php-fpm:2.2.0

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Adjust permissions for storage and bootstrap cache
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Expose port 80
EXPOSE 80
