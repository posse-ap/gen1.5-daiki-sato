#!/bin/sh

printenv

php-fpm -D &&
    nginx -g 'daemon off;'
