# Online education (The Ebbinghaus method)

1. Install PHP [Click](https://www.php.net/downloads)
2. Install Git [Click](https://git-scm.com/downloads)
3. Git clone
```bach
https://github.com/VulnerableCreature/laravel_educational_platform.git
```
4. Install Composer [Click](https://getcomposer.org/Composer-Setup.exe)
   after install open cmd and check
```bash
composer -v
```
5. Install IDE - PhpStorm OR VsCode
6. Instal npm [Click](https://nodejs.org/en/download)
7. Install `Docker` [Click](https://www.docker.com/products/docker-desktop/) or `PgAdmin` [Click](https://www.pgadmin.org/download/pgadmin-4-windows/)

> Лучше `Docker`

8. Open IDE
9. Open integreted terminal and use command
```bash
git clone https://github.com/VulnerableCreature/laravel_educational_platform.git
```
> Далее все действия выполняются в терминале!

10. For Docker
```bash
docker-compose up -d postgresql
```

11. Enter folder with project
```bash
cd src
```
```bash
composer install
```
12. Open second terminal and
```bash
npm instal
```

> WAIT

13. Rename file `.env.example` in `.env`
    insert next code
```bash
APP_NAME="Educational online platform"
APP_ENV=local
APP_KEY=base64:PHVcLaeRqvHJZ+PLNJKwX6AQzEp5Nu8P0m2ASla9awU=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5434
DB_DATABASE=educational
DB_USERNAME=root
DB_PASSWORD=root

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

#fmrd ixmr qtio sjzx
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=magicalhippogriff@gmail.com
MAIL_PASSWORD=fmrdixmrqtiosjzx
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=EducationOnline@gmail.com
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

```bash
php artisan migrate
```

```bash
php artisan db:seed
```

```bash
php artisan storage:link
```

```bash
php artisan queue:work
```

14. Open browser go to link
```bash
http://127.0.0.1:8000/
```

Enter how admin

login: `admin`
password: `123`