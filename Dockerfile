# force rebuild 002
FROM php:8.2-cli

# Install system dependencies and PHP extensions Laravel needs
RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    git \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install zip pdo pdo_mysql mbstring tokenizer xml

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy app files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Do NOT cache config yet (env vars still changing)
# RUN php artisan config:cache

EXPOSE 10000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
