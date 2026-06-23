# Etapa 1: Construir assets con Node (Compatible con Mix y Vite)
FROM node:20-alpine AS build-frontend
WORKDIR /app

# Copiamos package.json y los archivos de configuración de forma opcional.
# Usar j[s] evita que Docker falle si alguno de los dos archivos no existe.
COPY package*.json webpack.mix.j[s] vite.config.j[s] ./
RUN npm install

COPY resources/ ./resources/

# Ejecuta el script según corresponda (Mix usa 'production', Vite usa 'build')
RUN npm run production || npm run build

# Etapa 2: PHP + Apache
FROM php:8.2-apache

# Instalamos dependencias del sistema incluyendo libpq-dev para PostgreSQL
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libpq-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd zip \
    && rm -rf /var/lib/apt/lists/*

# Instalar Composer
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copiar proyecto PHP
COPY . .

# Copiar los assets construidos en la primera etapa.
# Se copia toda la carpeta public para asegurar que pasen tanto 'mix' como 'build' (Vite)
COPY --from=build-frontend /app/public ./public

# Instalar dependencias de Laravel sin librerías de desarrollo
RUN composer install --no-dev --optimize-autoloader

# Permisos correctos para Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# Configuración de Apache
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# Configuración dinámica del puerto (Ideal para Cloud Run / entornos cloud)
ENV PORT=8080
RUN sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 8080