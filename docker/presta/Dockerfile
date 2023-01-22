# Git
FROM php:7.4-alpine as intermediate

RUN apk update
RUN apk add git

RUN git clone --single-branch https://github.com/MichalTurek/electronic-business-project

# Prestashop
FROM prestashop/prestashop:1.7.8.7

ARG DATABASE_HOST=mariadb
ARG DATABASE_PORT=''
ARG DATABASE_NAME=prestashop
ARG DATABASE_USER=root
ARG DATABASE_PASSWORD=root
ARG DATABASE_PREFIX=ps_

COPY --from=intermediate /electronic-business-project/src .
RUN chmod -R 755 .
RUN chown -R www-data:www-data /var/www/html
RUN rm -rf install/

# SSL
COPY --from=intermediate /electronic-business-project/ssl/000-default.conf /ssl/000-default.conf
COPY --from=intermediate /electronic-business-project/ssl.sh .

# Memcached
RUN apt-get update
RUN apt-get -y install memcached libmemcached-dev zlib1g-dev
RUN pecl install memcached
RUN echo extension=memcached.so >> /usr/local/etc/php/php.ini
RUN /etc/init.d/apache2 restart

# Ports
EXPOSE 80
EXPOSE 443

CMD ["bash", "ssl.sh"]