IMG = ft_server
NAME = server

stat:
	docker images
	echo
	docker ps -a

build:
	docker build --tag $(IMG) .

run:
	docker run -p 80:80 -p 443:443 --name $(NAME) -d $(IMG)

stop:
	docker stop $(NAME)

start:
	docker start $(NAME)

shell:
	docker exec -it $(NAME) bash

autoindex_on:
	docker exec $(NAME) bash /autoindex_on.sh

autoindex_off:
	docker exec $(NAME) bash /autoindex_off.sh

clean: stop
	docker rm $(NAME)