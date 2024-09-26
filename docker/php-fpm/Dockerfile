FROM php:8.2-fpm-alpine

RUN apk add --no-cache autoconf g++ make \
 mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini \
 curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer --quiet \
    && rm -rf /root/.composer/cache

WORKDIR /application

CMD ["php", "-S", "localhost:7600"]