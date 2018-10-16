FROM php:7.2-apache
RUN docker-php-source extract \
  docker-php-ext-install pdo_mysql \
  docker-php-ext-enable pdo_mysql \
  # do important things \
  && docker-php-source delete