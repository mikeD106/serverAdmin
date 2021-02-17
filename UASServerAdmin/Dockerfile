#image base
FROM php:7.4-apache

#update image
RUN apt-get update
RUN docker-php-ext-install mysqli

#set user
USER root

#set working dir
WORKDIR /var/www/html

#ownership transfer
RUN chown -R www-data:www-data /var/www

#permission change
RUN chmod -R ug=rwx /var/www
RUN chmod -R o=r /var/www

#define volume
VOLUME /var/www/html

#copy file app
COPY /index /var/www/html
