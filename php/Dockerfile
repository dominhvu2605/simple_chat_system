FROM php:7.4-fpm

# update 
RUN apt-get update; 

#install utiliti
RUN apt-get install -y zlib1g-dev libicu-dev g++
RUN apt-get install nano

#install extensions 
RUN docker-php-ext-install intl
RUN docker-php-ext-install pdo_mysql