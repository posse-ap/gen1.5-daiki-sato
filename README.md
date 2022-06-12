## 該当フェーズ
- フェーズ3

## その他
- LGTMと打ったら、自動でLGTM画像が生成されるようになっています

## setup

`docker-compose up -d`

`docker exec -it <appコンテナID> composer install`

`docker exec -it <appコンテナID> php artisan migrate:refresh --seed`

And you can access `http://localhost`
