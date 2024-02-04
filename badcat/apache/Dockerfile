FROM php:7.4-apache

ADD php.ini /usr/local/etc/php/
ADD 000-default.conf /etc/apache2/sites-enabled

RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

RUN apt-get update && apt-get install -y  \
    libpq-dev		\    
    libonig-dev  	\
    libpng-dev		\
    && docker-php-ext-install -j$(nproc) mysqli

