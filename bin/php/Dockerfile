FROM php:7.2-fpm
RUN apt-get update && apt-get install -y \
        git \
        libzip-dev \
        zip \
        unzip \
        libpq-dev \
        nano
RUN docker-php-ext-configure zip --with-libzip
RUN docker-php-ext-install pgsql pdo_pgsql pdo_mysql mysqli zip
RUN curl --silent --show-error https://getcomposer.org/installer | php && \
        mv composer.phar /usr/local/bin/composer
RUN composer global require laravel/installer
