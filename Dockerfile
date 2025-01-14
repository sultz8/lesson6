FROM php:8.3-cli-alpine

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN apk add --no-cache git nano curl iputils \
    && rm -rf /var/cache/apk/* \
    && rm -rf /tmp/*