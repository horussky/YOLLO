FROM php:8.4-apache
COPY . /var/www/html
COPY config/yollo.local.conf /etc/apache2/sites-available/yollo.local.conf
RUN a2enmod rewrite
WORKDIR /var/www/html
EXPOSE 80
