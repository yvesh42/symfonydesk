FROM php:8.4-fpm

# Installer curl, git, les dépendances pour intl, unzip et Xdebug
RUN apt-get update && apt-get install -y \
    curl \
    git \
    libicu-dev \
    libzip-dev \
    libonig-dev \
    unzip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer l'extension intl
RUN docker-php-ext-configure intl && docker-php-ext-install intl

# Installer l'extension MySQL (compatible MariaDB)
RUN docker-php-ext-install pdo_mysql

# Installer l'accélérateur PHP opcache
RUN docker-php-ext-install opcache

# Installer Xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Télécharger et installer l'installateur Symfony
RUN curl -sS https://get.symfony.com/cli/installer | bash \
    && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Télécharger et installer Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer