FROM php:8.0-apache

# Copia el contenido de tu aplicación a /var/www/html/
COPY . /var/www/html/

# Instala los módulos necesarios para la extensión mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get install -y iputils-ping


# Configura el servidor Apache
RUN a2enmod rewrite
RUN chown -R www-data:www-data /var/www/html/

# Exponer el puerto 80 para que sea accesible desde el exterior
EXPOSE 80

# Arranca Apache en primer plano
CMD ["apache2ctl", "-D", "FOREGROUND"]
