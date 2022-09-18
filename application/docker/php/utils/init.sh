#!/bin/bash

# Чтобы можно было редактировать файлы хоста в обе стороны
usermod -u $HOST_UID www-data && groupmod -g $HOST_GID www-data
