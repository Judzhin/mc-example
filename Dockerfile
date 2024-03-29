FROM php:7.3-cli

RUN apt-get update && apt-get install -y libpq-dev libicu-dev unzip wget \
    && docker-php-ext-install pdo_mysql bcmath intl \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

RUN wget https://getcomposer.org/installer -O - -q | php -- --install-dir=/bin --filename=composer --quiet

ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /var/www
