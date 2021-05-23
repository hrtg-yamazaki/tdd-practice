FROM php:8.0.1-fpm

ENV LANG C.UTF-8

RUN mkdir /app
WORKDIR /app

COPY .docker/php/php.ini /usr/local/etc/php/

RUN apt-get update \
    && apt-get install -y libzip-dev zlib1g-dev unzip mariadb-client \
    && docker-php-ext-install zip pdo_mysql

COPY --from=composer:2.0.13 /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV PATH $PATH:/usr/bin/composer/vendor/bin
