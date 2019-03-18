FROM php:5-apache

COPY ./www/ /var/www/html/
RUN chmod -R 777 /var/www/html/uploads

RUN docker-php-ext-install mysqli
