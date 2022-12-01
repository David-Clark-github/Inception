FROM		debian:buster
RUN			apt-get update && apt-get install -y \
			nginx \
			openssl \
			vim

RUN			mkdir -p /etc/nginx/ssl/private/ && mkdir -p /etc/nginx/ssl/cert/

RUN			openssl req -x509 -nodes -days 365 -newkey rsa:4096 -keyout /etc/nginx/ssl/private/server.key -out /etc/nginx/ssl/cert/server.crt -subj "/C=FR/ST=Paris/L=Paris/O=wordpress/CN=dclark.42.fr";

COPY		Complement/default /etc/nginx/sites-available

EXPOSE		443

CMD			["/usr/sbin/nginx", "-g", "daemon off;"]
