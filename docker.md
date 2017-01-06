```
$ docker-compose build
$ docker-compose up -d
$ cp .env.docker .env
$ docker exec -it glitterdemo_php_1 composer install
$ docker exec -it glitterdemo_php_1 php artisan key:generate
$ docker exec -it glitterdemo_php_1 php artisan migrate
```

http://localhost:8888/