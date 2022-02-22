## Requisitos
- Laravel 6
- Composer
- MySQL / PostgreSQL 

## Instalación
- En la base de datos de preferencia (MySQL/PostgreSQL) crear una nueva base de datos
- Clonar el proyecto
- En la raíz del proyecto correr el comando:
> composer install
- Si en la consola se muestra un error relacionado con el paquete 'voku/portable-ascii', correr el comando:
> composer update voku/portable-ascii
- Para generar el archivo .env correr el comando:
> copy .env.example .env
- Una vez generado el archivo .env configurar la base de datos
    - DB_CONNECTION
    - DB_HOST
    - DB_PORT
    - DB_DATABASE
    - DB_USERNAME
    - DB_PASSWORD
- Una vez configurada la base de datos proceder a realizar la migración e inserción de datos mediante el comando:
> php artisan migrate --seed

## Iniciar Servidor
Para ejecutar el servidor de manera local
> php artisan serve
