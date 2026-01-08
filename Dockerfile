FROM php:8.2-apache

# Instalar extensiones para que PHP pueda hablar con MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar mod_rewrite
RUN a2enmod rewrite