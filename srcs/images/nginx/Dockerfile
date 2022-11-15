FROM		debian:buster
RUN			apt-get update && apt-get install -y \
			nginx \
			vim

COPY		complement/default /etc/nginx/sites-available

#RUN			ln -s /etc/nginx/sites-available/wordpress.conf /etc/nginx/sites-enabled/

EXPOSE		80/tcp

CMD			["/usr/sbin/nginx", "-g", "daemon off;"]
