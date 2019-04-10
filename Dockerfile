FROM php:5-apache
RUN apt-get update
RUN apt-get install -y --allow-unauthenticated net-tools
RUN docker-php-ext-install sockets pdo pdo_mysql mysqli
RUN a2enmod rewrite
COPY . /var/www/html
EXPOSE 80
RUN chown -R www-data:www-data /var/www/html
CMD apache2-foreground

