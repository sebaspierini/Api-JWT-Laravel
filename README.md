
## Prueba Técnica Talentu para desarrolladores PHP Backend

Queremos realizar una API para bolsa de empleo en la que es necesario tener en cuenta:
 
1.	Autenticación utilizando JWT.
2.	En un endpoint REST queremos almacenar registros de tipo usuario con los siguientes campos:
o	Correo
o	Nombre
o	Tipo de documento
o	Número Documento
3.	En otro endpoint queremos almacenar registros de tipo Oferta Laboral con los siguientes campos:
o	Nombre de la oferta 
o	Usuarios Asociados [Uno o muchos usuarios del punto 2]
o	Estado [Activo, Inactivo]
4.	Un endpoint REST que permita obtener todas las ofertas con candidatos asociados. 
Consideraciones
Se evaluaran las siguientes aspectos de la solución entregada:


1.	Instrucciones de despliegue para pruebas.
2.	Legibilidad del código.
3.	Cantidad de datos precargados para pruebas de performance (Seeders).
4.	Tests unitarios o integración.
Bono
1.	Despliegue Dockerizado
2.	Github Actions
3.	Despliegue en cualquier entorno open source (Heroku)

Pasos para la configuración

1. En windows instalar wsl2
2. Instalar docker
3. Descargar proyecto desde git
4. Abrir el proyecto y ejecutar lo siguiente
docker run --rm --interactive --tty \
 --volume $PWD:/app \
 composer install --ignore-platform-reqs --no-scripts
5. Ejecutar nano ~/.basrc y agregar la siguiente línea: alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
6. Guardar el cambio y ejecutar source ~/.bashrc para actualizar
7. Pararse dentro del proyecto y correr el comando sail up -d (Se descargá todo lo necesario para correr el ambiente)
8. 