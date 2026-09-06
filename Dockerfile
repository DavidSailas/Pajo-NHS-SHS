# Dockerfile for deploying a frontend-only Laravel app (no database) to Render.

# --- Stage 1: build frontend assets (CSS/JS) with Node ---
FROM node:20-alpine AS assets
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm install
COPY . .
RUN npm run build

# --- Stage 2: final image with PHP + Nginx ---
FROM richarvey/nginx-php-fpm:3.1.6

# Get Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy the whole Laravel project into the image
COPY . .

# Install PHP packages during build
RUN composer update --no-dev --optimize-autoloader --working-dir=/var/www/html --no-interaction

# Bring in the compiled frontend assets from Stage 1
COPY --from=assets /app/public/build /var/www/html/public/build

# --- Image behavior flags ---
ENV WEBROOT /var/www/html/public
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV RUN_SCRIPTS 1
ENV PHP_ERRORS_STDERR 1
ENV SKIP_COMPOSER 1
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr
ENV SESSION_DRIVER file
ENV CACHE_STORE file

CMD ["/start.sh"]
