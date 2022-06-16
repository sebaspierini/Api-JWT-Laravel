
## API para bolsa de empleo Backend

1.	Autenticación utilizando JWT.
2.	En un endpoint REST almacenar registros de tipo usuario con los siguientes campos:
o	Correo
o	Nombre
o	Tipo de documento
o	Número Documento
3.	En otro endpoint almacenar registros de tipo Oferta Laboral con los siguientes campos:
o	Nombre de la oferta 
o	Usuarios Asociados [Uno o muchos usuarios del punto 2]
o	Estado [Activo, Inactivo]
4.	Endpoint REST que permite obtener todas las ofertas con candidatos asociados. 


1.	Instrucciones de despliegue para pruebas.
2.	Cantidad de datos precargados para pruebas de performance (Seeders).
3.	Despliegue Dockerizado
