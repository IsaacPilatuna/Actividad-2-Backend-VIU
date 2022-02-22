## Requisitos
- Laravel 6
- Composer
- MySQL / PostgreSQL 

## Instalación
- En la base de datos de preferencia (MySQL/PostgreSQL) crear una nueva base de datos
- Clonar el proyecto
- En la raíz del proyecto correr el comando:
```markdown
> composer install
```
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
- Para generar el key correr el comando:
>php artisan key:generate

## Iniciar Servidor
Para ejecutar el servidor de manera local
> php artisan serve
