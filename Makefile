NAME	=	Inception

DSRC	=	srcs/

$(NAME):
	docker-compose -f ./$(DSRC)docker-compose.yml down
	docker-compose -f ./$(DSRC)docker-compose.yml up -d

stop:
	docker container stop $$(docker ps -aq)

c_rm:	stop
	docker container rm $$(docker ps -aq)
#	docker volume rm $$(docker volume ls -q)

fclean:	c_rm
	docker image rm $$(docker images -q)

re:		fclean $(NAME)
