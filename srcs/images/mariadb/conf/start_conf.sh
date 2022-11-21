#!/bin/sh

cp 50 /etc/mysql/mariadb.conf.d/50-server.cnf
service mysql start
mysql -u root < conf.sql
mysql
