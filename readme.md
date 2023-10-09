https://dev.to/dbazhenov/how-to-develop-a-simple-web-application-using-docker-compose-nginx-php-8-and-mongodb-6-nhi

#### Creo el archivo Dockerfile

#### Creo la imagen con el comando: docker build -t nginx-php-mongo .


#### Creo la estructura de carpetas para el volumen

    .
    ├── docker-compose.yml
    ├── Dockerfile
    ├── app
    │   └──  index.php
    ├── config
    │   └──  default.conf

#### Ejecuto el comando: docker-compose up -d

-- se debería de poder ver el archivo php info en la ruta: http://localhost

#### instalar las librerias de PHP en el projecto, usando composer
se crear en la carpeta app el archivo composer.json

    {
        "require": {
            "mongodb/mongodb": "^1.6",
            "ext-mongodb": "^1.6"
        }
    }
