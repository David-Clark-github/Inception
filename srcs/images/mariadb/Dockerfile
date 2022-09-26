FROM			debian:buster
RUN				apt update && apt install -y mariadb-server && apt update
ENTRYPOINT		["service", "mysql", "start"]
