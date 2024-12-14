FROM php:7.4-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libonig-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    nginx \
    libzip-dev   # Add libzip-dev package for libzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Remove default server configuration
RUN if [ -e /etc/nginx/sites-available/default ]; then rm /etc/nginx/sites-available/default; fi

# Add our Nginx configuration
COPY ./nginx.conf /etc/nginx/sites-available/

# Enable our Nginx configuration
RUN ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/

# Remove default Nginx HTML files
RUN rm -rf /var/www/html

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Change current user to www
USER www

# Create SSL directory with root user
USER root
RUN mkdir /etc/nginx/ssl
RUN chown www:www /etc/nginx/ssl
USER www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Expose ports
EXPOSE 9000
EXPOSE 443

# Generate SSL certificates
USER root
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/nginx.key -out /etc/nginx/ssl/nginx.crt -subj "/C=US/ST=SomeState/L=SomeCity/O=SomeOrganization/OU=SomeUnit/CN=example.com"
RUN chown www:www /etc/nginx/ssl/nginx.key
RUN chown www:www /etc/nginx/ssl/nginx.crt
USER www
