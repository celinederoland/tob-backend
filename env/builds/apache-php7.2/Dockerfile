FROM php:7.2-apache
RUN apt-get update && apt-get install -y libssl-dev && rm -rf /var/lib/apt/lists/*
RUN apt-get install pkg-config
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd
RUN pecl install xdebug-2.6.1 && docker-php-ext-enable xdebug
RUN pecl install mongodb && docker-php-ext-enable mongodb

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

COPY virtualhost.conf /etc/apache2/sites-available/000-default.conf
COPY apache2.conf /etc/apache2/apache2.conf
WORKDIR /var/www/html/public
RUN a2enmod rewrite
RUN service apache2 restart