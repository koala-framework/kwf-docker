FROM php:5.6-cli
MAINTAINER Niko Sams <ns@vivid-planet.com>

RUN apt-get update && apt-get install -y nodejs npm git-core
RUN docker-php-ext-install zip

RUN npm install bower

ENV COMPOSER_HOME /composer
ENV COMPOSER_ALLOW_SUPERUSER 1

RUN curl -o /tmp/composer-setup.php https://getcomposer.org/installer \
  && curl -o /tmp/composer-setup.sig https://composer.github.io/installer.sig \
  && php -r "if (hash('SHA384', file_get_contents('/tmp/composer-setup.php')) !== trim(file_get_contents('/tmp/composer-setup.sig'))) { unlink('/tmp/composer-setup.php'); echo 'Invalid installer' . PHP_EOL; exit(1); }"

ENV COMPOSER_VERSION 1.1.2

RUN php /tmp/composer-setup.php --no-ansi --install-dir=/usr/local/bin --filename=composer --version=${COMPOSER_VERSION} && rm -rf /tmp/composer-setup.php

ADD ./php.ini /usr/local/etc/php/conf.d
ADD ./entrypoint.php /usr/local/bin/entrypoint.php


WORKDIR /var/www/html
CMD [""]
ENTRYPOINT ["php", "/usr/local/bin/entrypoint.php"]
