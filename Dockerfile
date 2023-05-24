FROM drupal:10.0

# Copy composer.json to nstall required Drupal packages and dependencies
COPY ./composer.json composer.lock /opt/drupal/

# Add composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Drupal dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --working-dir=/opt/drupal

# Adjust the path so we can use drush
ENV PATH="/root/.composer/vendor/bin:${PATH}"

# Set the working directory
WORKDIR /opt/drupal/web

# Install Drush
RUN composer global require drush/drush

# Install Node.js and npm
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - \
  && apt-get install -y nodejs


# Add Drush to the system PATH
ENV PATH="${PATH}:/root/.composer/vendor/bin"


# Install packages and remove lists
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    mariadb-client \
    vim \
    && rm -rf /var/lib/apt/lists/*

# Set entrypoint script as the container entrypoint
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2-foreground"]