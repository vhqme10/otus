FROM php:8.2-fpm-alpine

RUN apk add --no-cache autoconf g++ make  \
  && mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm -rf /root/.composer/cache


WORKDIR /application