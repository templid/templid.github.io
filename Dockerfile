FROM php:8.1.14RC1-cli

WORKDIR /app

COPY --from=composer:2.4.4 /usr/bin/composer /usr/bin/composer

RUN apt-get update \
    && apt-get upgrade -y \
    && apt-get install -y libzip-dev zip \
    && docker-php-ext-install zip \
    && docker-php-ext-install mysqli \
    && pecl install xdebug-3.1.3 \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode = debug" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.start_with_request = trigger" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.discover_client_host = 1" >> /usr/local/etc/php/conf.d/xdebug.ini

RUN useradd -m -d /home/templid -s /bin/bash templid