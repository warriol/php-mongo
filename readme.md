https://dev.to/dbazhenov/how-to-develop-a-simple-web-application-using-docker-compose-nginx-php-8-and-mongodb-6-nhi

# Docker Compose: Nginx, PHP 8 y MongoDB 6
## Preparo imagen de docker con PHP + Composer + MongoDB
#### Creo el archivo:
    ·
    ├── Dockerfile
#### Ejecuto la imagen con el comando: 
```docker build -t nginx-php-mongo .```
#### Creo el archivo:
    ·
    ├── docker-compose.yml
#### Creo la estructura de carpetas para el volumen, con archivos de configuración de nginx y php:
    .
    ├── docker-compose.yml
    ├── Dockerfile
    ├── app
    │   └──  index.php
    ├── config
    │   └──  default.conf

#### Ejecuto el comando:
```docker-compose up -d```
-- se debería de poder ver el archivo php info en la ruta: http://localhost

#Instalar librerias de PHP requeridas por mongoDb con Composer

#### instalar las librerias de PHP en el projecto, usando composer
se crear en la carpeta app el archivo composer.json

    {
        "require": {
            "mongodb/mongodb": "^1.6",
            "ext-mongodb": "^1.6"
        }
    }

## Conectar al contenedor de PHP
```docker exec -it nginx-php-mongo bash```

## Instalar las librerias de PHP requeridas por mongoDb con Composer
```composer install```