# Dockerfile for deploying a frontend-only Laravel app (no database) to Render.
# Base image bundles Nginx + PHP-FPM and knows how to serve a Laravel /public folder.
FROM richarvey/nginx-php-fpm:3.1.6

# Get the composer tool so we can install PHP packages during build
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy the whole Laravel project into the image
COPY . .

# Install PHP packages now, during build (this is the fix)
RUN composer update --no-dev --optimize-autoloader --working-dir=/var/www/html --no-interaction

# --- Image behavior flags ---
# Point Nginx at Laravel's public/ folder (NOT the project root)
ENV WEBROOT /var/www/html/public

# Let composer run as root inside the container
ENV COMPOSER_ALLOW_SUPERUSER 1

# Run any *.sh scripts found in the project root before starting the server
# (this is what triggers 00-laravel-deploy.sh below)
ENV RUN_SCRIPTS 1

# Send PHP errors to stdout so they show up in Render's log viewer
ENV PHP_ERRORS_STDERR 1

# We already installed composer packages above during build, skip it at runtime
ENV SKIP_COMPOSER 1

# Sensible Laravel production defaults.
# APP_KEY, APP_URL, etc. are set as real environment variables in the
# Render dashboard instead of being hardcoded here.
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr
ENV SESSION_DRIVER file
ENV CACHE_STORE file

CMD ["/start.sh"]
