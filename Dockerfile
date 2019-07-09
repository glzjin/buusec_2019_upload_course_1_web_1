FROM ctftraining/base_image_nginx_php_73

LABEL Author="glzjin <i@zhaoj.in>" Blog="https://www.zhaoj.in"

COPY ./files /tmp/
RUN cp -rf /tmp/html/ /var/www/ && \
    mkdir /var/www/html/uploads && \
    chown -R www-data:www-data /var/www/html/uploads
