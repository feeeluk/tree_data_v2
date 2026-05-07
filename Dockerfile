FROM php:8.2-apache

RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

WORKDIR /var/www/html

COPY . .

# Install Node + npm
RUN apt-get update && apt-get install -y curl \
    && curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Build frontend assets
RUN npm install
RUN npm run build

# Install PostgreSQL headers AFTER Node
RUN apt-get update && apt-get install -y libpq-dev

# Compile PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql

# Permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Install Git
RUN apt-get update && apt-get install -y git

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php \
    && composer install --no-dev --optimize-autoloader

EXPOSE 8080

CMD ["apache2-foreground"]
