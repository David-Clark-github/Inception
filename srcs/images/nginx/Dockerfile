FROM		debian:buster
RUN			apt update \
			&& apt install -y nginx vim \
			&& apt update
CMD			["/usr/sbin/nginx", "-g", "daemon off;"]
