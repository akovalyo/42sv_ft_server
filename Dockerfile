# base image 
FROM 	debian:buster

# install services
RUN 	apt-get update -y && apt-get upgrade -y
RUN	apt-get install wget vim nginx mariadb-server \
			php-fpm php-cli php-mbstring php-mysql -y

COPY 	srcs/latest.tar.gz ./
COPY 	srcs/phpMyAdmin-5.0.2-english.tar.gz ./
COPY 	srcs/autoindex_on.sh ./
COPY 	srcs/autoindex_off.sh ./

# RUN 	wget https://wordpress.org/latest.tar.gz
# RUN	wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz

# configure ngnix
RUN 	service nginx start
COPY 	srcs/nginx.conf /etc/nginx/sites-available/localhost
RUN 	rm /etc/nginx/sites-enabled/default
RUN 	ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost


# install wordpress
RUN 	tar xvfz latest.tar.gz
RUN	mv wordpress /var/www/html/wordpress
COPY 	srcs/wp-config.php /var/www/html/wordpress
RUN 	chown -R www-data:www-data /var/www/html
RUN 	chmod -R 755 /var/www/html/wordpress/

# install phpMyadmin
RUN 	tar xvfz phpMyAdmin-5.0.2-english.tar.gz
RUN	mv phpMyAdmin-5.0.2-english  /var/www/html/phpmyadmin
RUN	rm phpMyAdmin-5.0.2-english.tar.gz

# initialize db for wordpress
COPY 	srcs/create_db.sh ./
RUN 	bash create_db.sh

# create ssl key and certificate
RUN 	openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key \
	-out /etc/ssl/certs/nginx-selfsigned.crt -subj "/C=US/ST=CA/L=FREMONT/O=42/OU=42SV/CN=localhost"

# start server
COPY 	srcs/start.sh ./
CMD 	bash start.sh && tail -f /dev/null
