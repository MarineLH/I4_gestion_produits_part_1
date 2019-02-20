FROM php:5.6-apache
COPY ./www/ /var/www/html/

RUN docker-php-ext-install mysqli

