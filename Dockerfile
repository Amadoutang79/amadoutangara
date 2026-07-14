FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    zip \
    nodejs \
    npm \
    sqlite3 \
    libsqlite3-dev \
    libzip-dev

RUN docker-php-ext-install \
    pdo \
    pdo_sqlite \
    bcmath \
    zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN npm install

RUN npm run build

RUN mkdir -p database && touch database/database.sqlite

RUN chmod -R 775 storage bootstrap/cache database

ENV APP_ENV=production
ENV APP_DEBUG=false

EXPOSE 10000

CMD php artisan migrate --force && \
    php artisan serve --host=0.0.0.0 --port=10000