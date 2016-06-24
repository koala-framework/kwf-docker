FROM nmcteam/php56
MAINTAINER Niko Sams <ns@vivid-planet.com>

RUN yes '' | pecl install memcache
RUN echo "extension=memcache.so" > /etc/php5/mods-available/memcache.ini
RUN php5enmod memcache

RUN yes '' | pecl install apcu-4.0.11
RUN echo "extension=apcu.so" > /etc/php5/mods-available/apcu.ini
RUN php5enmod apcu

RUN echo "short_open_tag=On" >> /etc/php5/fpm/php.ini
RUN echo "short_open_tag=On" >> /etc/php5/cli/php.ini
