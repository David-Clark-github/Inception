FROM	debian:buster

RUN		apt-get update && apt-get install -y \
		wget \
		php-fpm \
		php-mysql \
		vim

EXPOSE	9000

COPY	./Requirement/ /tmp

RUN		wget https://wordpress.org/latest.tar.gz \
		&& tar -xzvf latest.tar.gz \
		&& rm latest.tar.gz \
		&& mv /tmp/wp-config.php /wordpress \
		&& mv /tmp/www.conf /etc/php/7.3/fpm/pool.d/ \
		&& mv wordpress /v_wordpress \
		&& mkdir /run/php

ENTRYPOINT	["php-fpm7.3", "-F", "-R"]
