NAME	=	Inception

DSRC	=	srcs/

$(NAME):
	docker-compose -f ./$(DSRC)docker-compose.yml up -d

stop:
	docker container stop $$(docker ps -aq)

c_rm:	stop
	docker container rm $$(docker ps -aq)

fclean:	c_rm
	docker image rm $$(docker images -q)

re:		fclean $(NAME)
