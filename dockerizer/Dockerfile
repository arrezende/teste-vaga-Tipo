FROM webdevops/php-apache:7.4-alpine

COPY ./dockerizer/php.ini /opt/docker/etc/php/php.ini
COPY ./dockerizer/vhost.conf /opt/docker/etc/httpd/vhost.conf
COPY . /app