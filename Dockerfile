FROM php:8.2-fpm

# Instala extensões do sistema e PHP necessárias
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd

# Instala o Composer globalmente
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Define diretório de trabalho
WORKDIR /var/www/html

RUN echo "Conteúdo do /var/www/html:"
RUN ls -la /var/www/html

# Copia os arquivos da aplicação
COPY . .

# Instala as dependências do Laravel
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Garante permissões corretas
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Copia entrypoint e garante permissão

COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Expõe a porta do Laravel
EXPOSE 9000

# Comando padrão
CMD ["docker-entrypoint.sh"]




