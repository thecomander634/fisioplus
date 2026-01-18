# 1. Usamos la imagen oficial de Nginx (versión alpine que es muy ligera)
FROM php:8.2-apache

# Instalar extensiones
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite

# COPIAR ARCHIVOS (Vital para la nube)
COPY . /var/www/html/