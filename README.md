# 42sv_ft_server

The goal of the project is to create a server through Docker based on Debian Buster (10) using Nginx and run Wordpress, phpMyAfmin and an SQL database. In addition server should be able to use SSL protocol.

### Usage:

image = ft_server
container = server

**Build image:**

```
docker build --tag ft_server .
```
or
```
make build
```

**Run image as a container:**

```
docker run -p 80:80 -p 443:443 --name server -d ft_server
```
or
```
make run
```

**Execute interactive bash shell on the running container:**

```
docker exec -it server bash
```
or
```
make shell
```

**Start existing container:**

```
docker start server
```
or
```
make start
```

**Stop existing container:**

```
docker stop server
```
or
```
make stop
```

**Turn autoindex off:**

```
make autoindex_off
```

**Turn autoindex on:**

```
make autoindex_on
```

### Services:

#### NGINX

NGINX is open source software for web serving, reverse proxying, caching, load balancing, media streaming, and more.

#### php-fpm

The interface for communicating with the NGINX and PHP server.

#### MariaDB

Is a fork of the famous MySQL system bought by Oracle. 

#### phpMyAdmin 

Is a web application for managing MySQL databases.

### Docker objects:

#### Image

Is a template for creating a Docker container. Ussually based on another image with some additional customization.

Build image based on *debian* with adding multiple services Wordpress, phpMyAdmin...

**Dockerfile** used to create own image, which defines the steps needed to create the image.

#### Container

A cantainer is a runnable instance of an image
