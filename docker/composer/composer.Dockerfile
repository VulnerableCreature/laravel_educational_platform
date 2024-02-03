FROM composer:2.5

WORKDIR /var/www/laravel_educational_platform

ENTRYPOINT [ "composer", "--ignore-platform-reqs" ]