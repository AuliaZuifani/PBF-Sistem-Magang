# Gunakan PHP 8.3 dengan Apache
FROM php:8.3-apache

# Install ekstensi yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    zip unzip curl libpng-dev libonig-dev libxml2-dev git \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Aktifkan mod_rewrite untuk routing Laravel
RUN a2enmod rewrite

# Copy semua file proyek ke folder Apache
COPY . /var/www/html

# Set folder kerja
WORKDIR /var/www/html

# Set permission yang aman dan kompatibel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
