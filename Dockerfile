# Dockerfile for deploying a frontend-only Laravel app (no database) to Render.
# Base image bundles Nginx + PHP-FPM and knows how to serve a Laravel /public folder.
FROM richarvey/nginx-php-fpm:3.1.6

# Copy the whole Laravel project into the image
COPY . .

# --- Image behavior flags ---
# Point Nginx at Laravel's public/ folder (NOT the project root)
ENV WEBROOT /var/www/html/public

# Let composer run as root inside the container
ENV COMPOSER_ALLOW_SUPERUSER 1

# Run any *.sh scripts found in the project root before starting the server
# (this is what triggers 00-laravel-deploy.sh below)
ENV RUN_SCRIPTS 1

# Send PHP errors to stderr so they show up in Render's log viewer
ENV PHP_ERRORS_STDERR 1

# We install composer dependencies ourselves in the deploy script,
# so tell the base image not to try to do it a second time.
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
