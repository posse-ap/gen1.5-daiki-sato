FROM php:8.0-fpm-alpine

ARG COMPOSER_CONFIG=

RUN apk upgrade --update \
    && apk --no-cache add \
    git \
    nginx \
    postgresql-dev \
    && docker-php-ext-install pdo_pgsql

COPY ./ /var/www/apps

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/

# Set working directory
WORKDIR /var/www/apps

# COPY .env
COPY .env.prod .env

# COPY php $PHP_INI_DIR
COPY ./php/etc /etc

# 権限付与
RUN chmod -R 777 /var/www/apps/storage

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer config --global github-oauth.github.com ${COMPOSER_CONFIG} \
    # ↓これ一旦保留
    # RUN composer config repositories.anti-pattern-inc/saasus-sdk-php vcs
    && composer require anti-pattern-inc/saasus-sdk-php:dev-for-apps-laravel9 \
    && composer install

# 起動スクリプト設定（Nginx+PHP-FPMの起動）
COPY ./php/run.sh /usr/local/bin/run.sh
RUN chmod 755 /usr/local/bin/run.sh
CMD ["run.sh"]

