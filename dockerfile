# Use official PHP image as the base image
FROM php:8.0-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy your local code to the container's web directory
COPY . /var/www/html/

# Set permissions for the Apache user to access the code
RUN chown -R www-data:www-data /var/www/html/

# Expose port 80 to access the app
EXPOSE 80