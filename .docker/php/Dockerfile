FROM php:7.1.0-fpm-alpine

MAINTAINER Masashi Machida <masashi.machida.mm@gmail.com>

RUN apk add --update \
    alpine-sdk \
    autoconf \
    bash \
    libpng-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libmemcached-dev \
    cyrus-sasl-dev \
    gettext-dev \
    libmcrypt-dev

RUN docker-php-ext-install \
        pdo \
        pdo_mysql \
        zip \
        mcrypt \
        gettext \
        tokenizer && \
    docker-php-ext-configure gd \
        --with-freetype-dir=/usr/local/lib \
        --with-jpeg-dir=/usr/local/lib \
        --with-png-dir=/usr/local/lib && \
    docker-php-ext-install gd opcache && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

RUN git clone -b php7 --depth 1 https://github.com/php-memcached-dev/php-memcached /tmp/php-memcached
WORKDIR /tmp/php-memcached
RUN phpize && ./configure && make && make install

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer config -g repos.packagist composer https://packagist.jp

COPY conf/php.ini /usr/local/etc/php/php.ini
COPY conf/conf.d/memcached.ini /usr/local/etc/php/conf.d/memcached.ini
COPY conf/conf.d/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
COPY conf/www.conf /usr/local/etc/php-fpm.d/zzz-www.conf

WORKDIR /opt/app

