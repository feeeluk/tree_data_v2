# force rebuild 005
FROM php:8.2-apache

WORKDIR /var/www/html

COPY . .

RUN apt-get update && apt-get install -y git

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php \
    && composer install --no-dev --optimize-autoloader

EXPOSE 8080

CMD ["apache2-foreground"]
