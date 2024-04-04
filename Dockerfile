version: '3.2'

services:
php:
container_name: php-server
build: .
volumes:
- ./htdocs:/var/www/html
ports:
- 8088:80
depends_on:
- mysql
mysql:
container_name: mysql-server
image: mysql:latest
ports:
- 3303:3306
environment:
MYSQL_ROOT_PASSWORD: sandirahasia
MYSQL_DATABASE: wordpress_dp
MYSQL_USER: wordpress_user
MYSQL_PASSWORD: sandi_wordpress
volumes:
- ./mysql_data:/var/lib/mysql
redis:
image: redis:latest
container_name: redis-server
ports:
- 6379:6379
