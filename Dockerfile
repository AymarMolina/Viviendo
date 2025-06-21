FROM php:8.2-apache

# Instala extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilita mod_rewrite si usas .htaccess
RUN a2enmod rewrite

# Copia los archivos del proyecto
RUN docker-php-ext-install mysqli
COPY . /var/www/html/

# Ajusta permisos
RUN chown -R www-data:www-data /var/www/html
