#!/usr/bin/env bash

rm -f /etc/nginx/conf.d/default.conf

envsubst '\${NGINX_HOST}' < /etc/nginx/conf.d/kg.conf.template > /etc/nginx/conf.d/kg.conf

if [ ! -d "/var/log/nginx/kg/web" ]; then
    mkdir -p /var/log/nginx/kg/web
fi



