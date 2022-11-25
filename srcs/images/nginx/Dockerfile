FROM		debian:buster
RUN			apt-get update && apt-get install -y \
			nginx \
			vim

COPY		Complement/default /etc/nginx/sites-available

EXPOSE		80

CMD			["/usr/sbin/nginx", "-g", "daemon off;"]
