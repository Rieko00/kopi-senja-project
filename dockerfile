FROM richarvey/nginx-php-fpm:latest

# Konfigurasi Environment
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Copy semua file project
COPY . /var/www/html

# Copy folder scripts agar bisa dijalankan otomatis oleh Image
# Image ini akan mencari script di folder /var/www/html/scripts/ dan menjalankannya
COPY ./scripts/ /var/www/html/scripts/

# Berikan izin eksekusi ke script (PENTING!)
RUN chmod +x /var/www/html/scripts/*.sh

# Expose port
EXPOSE 80