CREATE DATABASE IF NOT EXISTS wordpress;
GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress_user'@'%'
IDENTIFIED BY 'password';
FLUSH PRIVILEGES;
SHOW DATABASES;
