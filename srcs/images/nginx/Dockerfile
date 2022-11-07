FROM		debian:buster
RUN			apt-get update && apt-get install -y \
			nginx \
			vim

EXPOSE		80/tcp
CMD			["/usr/sbin/nginx", "-g", "daemon off;"]
