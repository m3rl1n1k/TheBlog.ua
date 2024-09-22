FROM php:8.3-fpm
ARG WORKDIR
WORKDIR ${WORKDIR}

RUN apt-get -y update && apt-get -y install git unzip vim rsync libyaml-dev

RUN pecl install xdebug yaml && docker-php-ext-enable xdebug yaml;
COPY ./Docker/php/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini


RUN docker-php-ext-install pdo pdo_mysql

ENV TERM xterm-256color

RUN php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer


CMD php-fpm
EXPOSE 9000