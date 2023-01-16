## Preview

 <p align="center">
   <img src="./images/v1.gif">
</p>

## Requirements

* [PHP 8](https://kinsta.com/blog/install-php/)
* [Docker](https://docs.docker.com/get-docker/)
* [Docker Compose](https://docker-docs.netlify.app/compose/install/)

## Docker Services

* [php: 8.0.2-fpm](https://hub.docker.com/layers/library/php/8.0.20-fpm/images/sha256-633d4e24d4cd4748c2700206f4e2e75eab3a4f1b74fdc330063db1b5a5b3409d?context=explore)
* [nginx: 1.19-alpine](https://hub.docker.com/layers/library/nginx/1.19.0-alpine/images/sha256-ee5a9b68e8d4a4b8b48318ff08ad5489bd1ce52b357bf48c511968a302bc347b?context=explore)

## Installation

* Run this to install the docker containers.

   ```sh
   ./install.sh
   ```
* Check running docker conatainers status.

   ```sh
   docker-compose ps
   ```
* Shut down all running docker containers.

   ```sh
   docker-compose down
