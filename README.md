Aprendiendo Laravel 5.6
===================
1.	Introducción a Laravel
-	Es un framework de código abierto creado en 2011
-	Incorpora las siguientes caracterìsticas:
-	Eloquen-ORM para trabajar con la base de datos
-	Motor de plantillas - Blade
-	Excelente documentación
-	Deploy
2.	Configurando el proyecto
-	Verificamos los requisitos del servidor:
-	PHP >= 7.1.3
-	OpenSSL PHP Extension
-	PDO PHP Extension
-	Mbstring PHP Extension
-	Tokenizer PHP Extension
-	XML PHP Extension
-	Ctype PHP Extension
-	JSON PHP Extension
-	Instalar composer
https://getcomposer.org/
-	Creamos el proyecto utilizando composer
 
-	Modificamos el nombre de nuestra aplicación (namespace)
 
-	En el archivo de configuración (config/app.php) activamos el debug, cambiamos el timezone y el idioma.
 
 
 
-	Creamos la carpeta “es” en el directorio “resources/lang“ y luego creamos los archivos auth.php, pagination.php, passwords.php y validation.php
-	Descargamos los archivos en español de la siguiente ruta
https://github.com/Laraveles/spanish/tree/master/resources/lang/es
-	Iniciamos nuestro servidor
 
3.	Rutas
