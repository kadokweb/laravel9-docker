
# Setup Docker Para Projetos Laravel 9 com PHP 8

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/kadokweb/laravel9-docker.git laravel9
```

```sh
cd laravel9/
```


<!-- Alterne para a branch laravel 8.x
```sh
git checkout laravel-9-com-php-8
``` -->


Remova o versionamento
```sh
rm -rf .git/
```


Acesse a pasta do projeto
```sh
cd example-project/
```
Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=KadokWeb
APP_URL=http://localhost:8180

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost:8180](http://localhost:8180)

## Você pode optar por outra porta para evitar conflito, nesse caso asamos a porta :8180
