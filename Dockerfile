FROM php:7.4
RUN apt-get update -y && apt-get install -y openssl zip unzip git libonig-dev
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring
WORKDIR /app
COPY . /app
RUN composer install

CMD php -S 0.0.0.0:8180 -t public
EXPOSE 8180
