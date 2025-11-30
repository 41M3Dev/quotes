FROM php:8.3-fpm

# Install nginx
RUN apt-get update && apt-get install -y \
    nginx \
    && rm -rf /var/lib/apt/lists/*

# Create necessary directories
RUN mkdir -p /var/log/nginx /var/cache/nginx /run/php /tmp/nginx

# Copy application files
COPY . /app
WORKDIR /app

# Copy nginx configuration
COPY nginx.conf /etc/nginx/nginx.conf

# Create a custom PHP-FPM configuration
RUN echo '[global]' > /usr/local/etc/php-fpm.d/www.conf && \
    echo 'error_log = /var/log/php-fpm.log' >> /usr/local/etc/php-fpm.d/www.conf && \
    echo '[www]' >> /usr/local/etc/php-fpm.d/www.conf && \
    echo 'user = www-data' >> /usr/local/etc/php-fpm.d/www.conf && \
    echo 'group = www-data' >> /usr/local/etc/php-fpm.d/www.conf && \
    echo 'listen = 127.0.0.1:9000' >> /usr/local/etc/php-fpm.d/www.conf && \
    echo 'pm = dynamic' >> /usr/local/etc/php-fpm.d/www.conf && \
    echo 'pm.max_children = 5' >> /usr/local/etc/php-fpm.d/www.conf && \
    echo 'pm.start_servers = 2' >> /usr/local/etc/php-fpm.d/www.conf && \
    echo 'pm.min_spare_servers = 1' >> /usr/local/etc/php-fpm.d/www.conf && \
    echo 'pm.max_spare_servers = 3' >> /usr/local/etc/php-fpm.d/www.conf && \
    echo 'clear_env = no' >> /usr/local/etc/php-fpm.d/www.conf

# Set permissions
RUN chown -R www-data:www-data /app

# Expose port
EXPOSE 3000

# Start PHP-FPM and Nginx
CMD php-fpm -D && nginx -g 'daemon off;'
