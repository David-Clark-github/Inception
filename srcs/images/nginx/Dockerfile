FROM	debian:buster
RUN		apt update && apt install -y nginx vim && apt update
COPY	complement/start_nginx.sh /
CMD		["sh", "start_nginx.sh"]
