#!/bin/sh

service mysql start
mysql -u root -p$MARIADB_ROOT_PASSWORD < conf.sql
mysql

