FROM			debian:buster
RUN				apt-get update && apt-get install -y \
				mariadb-server \
				mariadb-client \
				vim

COPY			./conf /conf
RUN				chmod 700 conf/start_conf.sh
WORKDIR			/conf
CMD				["./start_conf.sh"]
WORKDIR			../
