FROM dunglas/frankenphp:latest-php8.3

RUN install-php-extensions pcntl opcache

# Enable PHP production settings
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

ENV SERVER_NAME=frankenphp.belisc.com

COPY . /app

ENTRYPOINT ["php", "artisan", "octane:frankenphp"]