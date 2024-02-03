FROM php:8.2-fpm

WORKDIR /var/www/laravel_educational_platform

RUN apt-get update

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
  && php composer-setup.php \
  && php -r "unlink('composer-setup.php');"

COPY . /var/www/laravel_educational_platform/

RUN chown -R www-data:www-data \
        /var/www/laravel_educational_platform/storage \
        /var/www/laravel_educational_platform/bootstrap/cache

# RUN usermod -a -G www-data root
# RUN chown -R $USER:www-data /var/www/laravel_educational_platform

# RUN sudo chown -R www-data:www-data /var/www/laravel_educational_platform \
#     && sudo chmod 777 -R /var/www/laravel_educational_platform/storage \

RUN apt-get install -y libpq-dev \
  && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
  && docker-php-ext-install pdo pdo_pgsql pgsql