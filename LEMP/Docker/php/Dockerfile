FROM php:7.4-fpm-buster

# environment
ENV COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer \
  # Laravel environment
  DB_CONNECTION=mysql \
  DB_HOST=db \
  DB_PORT=3306 \
  DB_DATABASE=larasns \
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
  docker-php-ext-install pdo_mysql zip && \
  apt-get clean

# Laravelをインストールするためにcomposerをインストールする
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# Laravelコマンドを有効にするためにpashを通す
ENV PATH $PATH:/composer/vendor/bin

# Dockerfileと同じディレクトリに置いてあるphp.iniをコンテナのphp.iniにコピーする
COPY ./php.ini /usr/local/etc/php/php.ini

#nginxとphp-fpmの通信設定のファイルのコピー
# COPY ./php-fpm.d/zzz-www.conf /usr/local/etc/php-fpm.d/zzz-www.conf

# Node.jsのインストール
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash - \
  && apt-get install -y nodejs \
  && npm install -g yarn

WORKDIR /work/backend

# Laravel,Vue-cliのインストール
RUN composer global require laravel/installer && \
  yarn global add @vue/cli
