FROM php:5.6.10-fpm

RUN docker-php-ext-install pdo_mysql

EXPOSE 9000
CMD ["php-fpm"]