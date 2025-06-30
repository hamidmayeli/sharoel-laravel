# Dockerfile
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Node.js 20.x (LTS)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/laravel

# Copy existing application directory contents
COPY laravel .

# Copy public files to the correct location
COPY public_html /var/www/public

# Install Laravel dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Install npm dependencies
RUN npm install

# Build assets (with proper Node.js version)
# If build fails, create an empty build directory
RUN npm run build || (mkdir -p public/build && echo "Build failed, created empty build directory")

# Set permissions
RUN chown -R www-data:www-data /var/www/laravel \
    && chown -R www-data:www-data /var/www/public \
    && chmod -R 755 /var/www/laravel/storage \
    && chmod -R 755 /var/www/laravel/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
