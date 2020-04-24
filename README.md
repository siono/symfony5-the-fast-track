# symfony5-the-fast-track
Proyecto del libro symfony5 the fast track.

Antes de ejecutar el proyecto debemos tener:
1. **el cli de symfony**
2. **php7.3 o superior**
3. **docker**


Los pasos para ejecutar el proyecto son:

1. Instalar dependecias: **$symfony composer install**
2. Arracar los servicios de docker compose: **$docker-compose up -d**
3. Ejecutar las migraciones: **$symfony console doctrine:migrations:migrate**
4. Añadir los datos de prueba a la bbdd: **$symfony console doctrine:fixtures:load**
5. Levantar por lo menos un consumidor de rabbit: **$symfony run -d --watch=config,src,templates,vendor symfony console
messenger:consume async**
