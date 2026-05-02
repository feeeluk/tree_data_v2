# force rebuild 005
FROM php:8.2-apache


WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

EXPOSE 8080

CMD ["apache2-foreground"]