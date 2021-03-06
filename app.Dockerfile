FROM php:7-fpm

WORKDIR /application

RUN apt-get update   && docker-php-ext-install pdo pdo_mysql

COPY artisan .
COPY  . .
