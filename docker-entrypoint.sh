#!/bin/bash

# Espera o MySQL ficar disponível
until mysqladmin ping -h "$DB_HOST" --silent; do
    echo "Aguardando MySQL subir..."
    sleep 2
done

# Garante que dependências estão instaladas
composer install --no-interaction --prefer-dist --optimize-autoloader

# Roda migrations (ajuste para sua lógica real)
php artisan migrate --force --seed

# Opcional: cache
php artisan config:cache
php artisan route:cache

# Inicia servidor PHP embutido (caso não use nginx ou php-fpm)
# php -S 0.0.0.0:8524 -t public

# Ou, se estiver usando php-fpm:
exec php-fpm
