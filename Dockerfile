FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip

WORKDIR /app

COPY . .

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
