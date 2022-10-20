FROM	debian:buster
RUN		apt-get update && apt-get install -y \
		wget \
		php-fpm \
		php-mysql \
		vim

RUN		wget https://wordpress.org/latest.tar.gz \
		&& tar -xzvf latest.tar.gz \
		&& rm wordpress/wp-config-sample.php

COPY	./file_requirement/wp-config.php /wordpress
