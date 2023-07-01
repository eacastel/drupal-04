FROM drupal:10.0

# Add composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install packages and remove lists
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    mariadb-client \
    vim \
    libpng-dev \
    libzip-dev \
    libicu-dev \
    --no-install-recommends \
    && rm -rf /var/lib/apt/lists/*

# Enable the necessary PHP extensions
RUN docker-php-ext-install pdo_mysql zip gd intl bcmath

# Copy composer.json to install required Drupal packages and dependencies
COPY ./composer.json composer.lock /opt/drupal/
COPY ./modules /opt/drupal/web/modules
COPY ./profiles /opt/drupal/web/profiles
COPY ./themes /opt/drupal/web/themes
COPY ./sites /opt/drupal/web/sites
COPY ./libraries /opt/drupal/web/libraries
COPY ./sites/default/files /opt/drupal/web/sites/default/files

# Install Drupal dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --working-dir=/opt/drupal

# Adjust the path so we can use drush
ENV PATH="/root/.composer/vendor/bin:${PATH}"

# Set the working directory
WORKDIR /opt/drupal/web

# Install Node.js and npm
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - \
  && apt-get install -y nodejs

# Add Drush to the system PATH
ENV PATH="${PATH}:/root/.composer/vendor/bin"

# Set entrypoint script as the container entrypoint
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2-foreground"]
