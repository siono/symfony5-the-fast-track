# symfony5-the-fast-track
Proyecto del libro symfony5 the fast track.

Antes de ejecutar el proyecto debemos tener:
1. **el cli de symfony**
2. **php7.3 o superior**
3. **docker**


Los pasos para ejecutar el proyecto son:

1. Instalar dependecias: **$symfony composer install**
2. Arrancar servidor local Symfony: **$symfony server:start -d**
2. Arracar los servicios de docker compose: **$docker-compose up -d**
3. Ejecutar las migraciones: **$symfony console doctrine:migrations:migrate**
4. Añadir los datos de prueba a la bbdd: **$symfony console doctrine:fixtures:load**
5. Levantar por lo menos un consumidor de rabbit: **$symfony run -d --watch=config,src,templates,vendor symfony console messenger:consume async**

----------------------------------

**Durante el desarrollo con Bootstrap**

Durante el desarrollo, la compilación de los assets se puede hacer a través
del comando encore dev :

`$ symfony run yarn encore dev`

En lugar de ejecutar el comando cada vez que haya un cambio, déjalo
corriendo en segundo plano para que reaccione a los cambios en JS y CSS:

`$ symfony run -d yarn encore dev --watch`

**Ejecuntado la SPA en local**

1. `$ cd spa`

2. `$ yarn encore dev` : compila los archivos Css y Javascript

3. `$ symfony server:start -d --passthru=index.html` : levantamos el servidor local. El parámetro --passthru le dice al 
servidor web que pase todas las peticiones HTTP al archivo public/index.html

4. ```$ API_ENDPOINT=`symfony var:export SYMFONY_DEFAULT_ROUTE_URL --dir=..` yarn encore dev``` : La SPA ahora necesita 
saber la URL de nuestra API a través de la variable de entorno API_ENDPOINT. Configúrala con la URL del servidor web de
la API (que se ejecuta en el directorio .. ).

Ahora también la puedes ejecutar en segundo plano: ```$ API_ENDPOINT=`symfony var:export SYMFONY_DEFAULT_ROUTE_URL --dir=..` symfony run -d --watch=webpack.config.js yarn encore dev --watch```


**Comandos desarrolados**

    `$ symfony console app:comment:cleanup`  : limpia los comentarios rejected de la bbdd.
    `$ symfony console app:step:info`        : muestra el paso actual en el que estamos trabajando(para ser más precisos, 
                                               el nombre de la etiqueta Git adjuntada al commit actual de Git)

