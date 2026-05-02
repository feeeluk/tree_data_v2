# force rebuild 004
FROM php:8.2-apache

# Enable Apache mod_rewrite (Laravel needs it)
RUN a2enmod rewrite

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libzip-dev \
    libxml2-dev

# Install PHP extensions (these compile cleanly on this image)
RUN docker-php-ext-install pdo pdo_mysql zip mbstring tokenizer xml

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy app files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Apache serves on port 80 by default
EXPOSE 80
