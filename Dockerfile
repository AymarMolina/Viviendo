# Usa una imagen con Apache + PHP
FROM php:8.2-apache

# Copia tu proyecto al directorio del servidor web
COPY . /var/www/html/

# Activa el módulo de reescritura de URLs (opcional si usas .htaccess)
RUN a2enmod rewrite

# Cambia los permisos del directorio (opcional)
RUN chown -R www-data:www-data /var/www/html
