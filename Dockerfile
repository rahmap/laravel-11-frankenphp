FROM dunglas/frankenphp:latest-php8.3

RUN install-php-extensions pcntl opcache

COPY . /app

ENTRYPOINT ["php", "artisan", "octane:frankenphp"]