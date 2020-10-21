FROM php:7.4-fpm-buster

# environment
ENV COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer \
  # Laravel environment
  DB_CONNECTION=mysql \
  DB_HOST=db \
  DB_PORT=3306 \
  DB_DATABASE=rd_data \
  DB_USERNAME=user \
  DB_PASSWORD=password

RUN apt-get update && \
  apt-get upgrade -y && \
  apt-get install -y \
  curl \
  git \
  libzip-dev \
  unzip \
  zip \
  zlib1g-dev && \
  mkdir /var/run/php-fpm && \
  mkdir /var/log/php && \
  docker-php-ext-install pdo_mysql zip bcmath && \
  apt-get clean

RUN pecl install xdebug && \
  docker-php-ext-enable xdebug

# Laravelをインストールするためにcomposerをインストールする
COPY --from=composer:1.10 /usr/bin/composer /usr/bin/composer

# Laravelコマンドを有効にするためにpashを通す
ENV PATH $PATH:/composer/vendor/bin

# Dockerfileと同じディレクトリに置いてあるphp.iniをコンテナのphp.iniにコピーする
COPY ./php.ini /usr/local/etc/php/php.ini

#nginxとphp-fpmの通信設定のファイルのコピー
# COPY ./php-fpm.d/zzz-www.conf /usr/local/etc/php-fpm.d/zzz-www.conf

# Node.jsのインストール
#npmインストール
COPY --from=node:10.22 /usr/local/bin /usr/local/bin
COPY --from=node:10.22 /usr/local/lib /usr/local/lib

WORKDIR /work/backend/laravel
