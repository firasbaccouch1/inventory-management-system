FROM php:8.0.2-fpm
# Set working directory
WORKDIR /home/www/
# Copy composer.lock and composer.json
COPY ../../laravel/  /home/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libmcrypt-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    libonig-dev \
    libzip-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    openssl \
    curl \
    cron

RUN curl -sL https://deb.nodesource.com/setup_14.x
RUN apt-get install -y nodejs
# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install zip
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install gd
# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
#COPY . /var/www

# Copy existing application directory permissions
#COPY --chown=www:www . /var/www

# Change current user to www
RUN composer install
RUN chmod -R 777 ./storage/* bootstrap/cache \
  && php artisan optimize:clear \
  && php artisan key:generate 

RUN chmod +x /home/www/run_server.sh


 #Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["/home/www/run_server.sh"]