FROM		debian:buster
RUN			apt update \
			&& apt install -y nginx vim \
			&& apt update
EXPOSE		80/tcp
CMD			["/usr/sbin/nginx", "-g", "daemon off;"]
