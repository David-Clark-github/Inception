FROM	debian:buster
RUN		apt-get update && apt-get install -y \
		wget \
		php-fpm \
		php-mysql \
		vim

EXPOSE	9000/tcp
COPY	./file_requirement/wp-config.php /
COPY	./file_requirement/www.conf /etc/php/7.3/fpm/pool.d/
RUN		wget https://wordpress.org/latest.tar.gz \
		&& tar -xzvf latest.tar.gz \
		&& rm latest.tar.gz \
		&& mv wp-config.php /wordpress \
		&& mv wordpress v_w
RUN		mkdir /run/php

ENTRYPOINT	["php-fpm7.3", "-F", "-R"]
