# force rebuild 003
FROM php:8.2-alpine

# Install system dependencies
RUN apk add --no-cache \
    oniguruma-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    libxml2-dev

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring zip tokenizer xml

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy app files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

EXPOSE 10000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
