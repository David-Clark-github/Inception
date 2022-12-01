#!/bin/sh

cp 50-server.cnf /etc/mysql/mariadb.conf.d/
service mysql start
mysql -u root < conf.sql
mysql
