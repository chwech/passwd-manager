FROM php:7.2-apache
RUN docker-php-source extract \
  docker-php-ext-configure extension=php_pdo_mysql.dll \
  # do important things \
  && docker-php-source delete