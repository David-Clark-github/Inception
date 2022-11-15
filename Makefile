NAME	=	Inception

DSRC	=	srcs/

$(NAME):
	docker-compose -f ./$(DSRC)docker-compose.yml down
	docker-compose -f ./$(DSRC)docker-compose.yml up -d


# Wordpress
stop_wp:
	docker container stop wordpress-php

c_rm_wp:	stop_wp
	docker container rm wordpress-php

fclean_wp: c_rm_wp
	docker image rm srcs_wordpress_php

re_wp: fclean_wp $(NAME)



# Nginx
stop_ng:
	docker container stop nginx

c_rm_ng: stop_ng
	docker container rm nginx

fclean_ng: c_rm_ng
	docker image rm srcs_nginx

re_ng: fclean_ng $(NAME)



# MariaDB
stop_md:
	docker container stop mariadb

c_rm_md: stop_md
	docker container rm mariadb

fclean_md: c_rm_md
	docker image rm srcs_mariadb

re_md: fclean_md $(NAME)



# General
stop:
	docker container stop $$(docker ps -aq)

c_rm:	stop
	docker container rm $$(docker ps -aq)
	docker volume rm $$(docker volume ls -q)

fclean:	c_rm
	docker image rm $$(docker images -q)

# re_ng re_wp re_md
re:		fclean $(NAME)
