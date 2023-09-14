# Curso Slime

## Requisitos
Para ejecutar el proyecto en local debes tener un servidor andando con apache y mysql. En mi caso uso Xampp.
Tembién debes tener instalado composer


## Pasos para clonación por linea de comandos:

1) Clona el proyecto a tu repositorio local en mi caso me posicione en la carpta htdocs de xampp
```bash
git clone https://github.com/chinomedel/curso-slim.git

2) Una vez clonado debes eliminar el caché
```bash
composer clear-cache

3) Elimina la carpeta vendor
```bash
rm -rf vendor

4) Elimina el archivo composer.lock
```bash
rm composer.lock

5) Ejecuta el archivo composer.json
```bash
composer install

## Creación Base de Datos
Crea una base de datos con el nombre que quieras, en el directorio curso-slim/assets está el archivo para crear la tabla usuarios e
insertar 2 usuarios.

## Configuración de conexión
Modifica en la Clase Mysql que está en el directorio curso-slim/src/Models/MysqlModel la siguiente linea de código con los datos
de tu base de datos

$conn = new PDO("mysql:host=localhost;dbname=slim_prueba","root", "admin");
