```
$ docker-composer up -d
$ cp .evn.docker .env
$ docker exec -it glitterdemo_php_1 composer update
$ docker exec -it glitterdemo_php_1 php artisan key:generate
$ docker exec -it glitterdemo_php_1 php artisan migrate
```

http://localhost:8888/