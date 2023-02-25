FROM php:7.4-apache


RUN docker-php-ext-install mysqli

COPY index.php /var/www/html/index.php

EXPOSE 80


CMD ["apache2-foreground"]