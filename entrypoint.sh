#!/bin/bash

# Change ownership of Drupal files
chown -R www-data:www-data /opt/drupal/web

# Continue with the original entrypoint command
exec "$@"