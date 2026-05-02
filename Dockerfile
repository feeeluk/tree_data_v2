# force rebuild 005
FROM serversideup/php:8.2-fpm-nginx

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

EXPOSE 8080

CMD ["start-container"]
