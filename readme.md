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

# <span style="color: #e70b0b"> Si al iniciar el contenedor, no se conecta a Mongo, se debe crear nuevamente la carpeta 'vendor' desde aquí!! </span>

Fuente: https://www.iteramos.com/pregunta/30538/como-anadir-color-al-archivo-readmemd-de-github

## Conectar al contenedor de PHP
```docker exec -it nginx-php-mongo bash```

## Instalar las librerias de PHP requeridas por mongoDb con Composer
```composer install```

-- esta acción creará la carpeta VENDOR con las dependencia necesarias y ela rchivo autoload.php

# Agregar la imagen de MongoDB al docker-compose.yml
- detener el lanzador
  - ```docker-compose down```
## agregar la imagen de mongoDB al docker-compose.yml
- se arega el servidor de mongo, en particular la alternativa gratuita de mongoDB Atlas
- Percona Server for MongoDB 
- https://www.percona.com/doc/percona-server-for-mongodb/LATEST/install/docker.html

```
  mongodb:
  image: "percona/percona-server-mongodb:6.0.4"
  volumes:
  - ./data:/data/db
  restart: always
  environment:
  MONGO_INITDB_ROOT_USERNAME: root
  MONGO_INITDB_ROOT_PASSWORD: secret
  MONGO_INITDB_DATABASE: tutorial
  ports:
  - "27017:27017"
```

## tambien se debe modificar el servicio php

```
  php-fpm:
  image: nginx-php-mongo
  volumes:
  - ./app:/var/www/html
  environment:
  DB_USERNAME: root
  DB_PASSWORD: secret
  DB_HOST: mongodb # matches the service with mongodb
```

- iniciar el lanzador
  - ```docker-compose up -d```

## Crear archvio de prueba de mongo.php 

El codigo fuente de este archivo se encuentra en la carpeta app, escribirá 1000 documentos.

## Instalar MongoDB Compass
https://www.mongodb.com/try/download/compass
Usar hosr: localhost y puerto 27017
los datos de usuario y pass se encuentra en el archvio docker-compose.yml