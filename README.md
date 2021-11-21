# Crud CodeIgniter + GroceryCrud

Este es un pequeño crud de prueba para poder usar code igniter de la forma mas rapida. En lo posible desarrollare mi propio crud con formularios y acciones propias.

# Instalacion
## Instalacion de CodeIgniter

Descargue el archivo de CodeIgniter 3 desde https://codeigniter.es/user_guide/installation/downloads.html.
Luego de esto descomprimalo, renombrelo y muevalo a la carpeta de xampp (/var/www/html) o de apache (/opt/lamp/htdocs)
*esto solo aplica a linux, en windows seran otras.

### Configuracion

path de la aplicacion: en application/config/config.php agregarmos la url base de proyecto http://localhost/proyecto-code/.

``` php
esto
$config['base_url'] = '';
por esto
$config['base_url'] = 'http://localhost/proyecto-code/';
```
*personalmente me salte este paso la primera vez, lo cual es importante siempre.

## Instalacion de GroceryCrud

Para instalar este pequeña herramienta (que de pequeñana no tiene nada), tenemos que descargar el archivo del siguiente link : https://www.grocerycrud.com/v1.x/downloads .

Luego descomprima el contenido de la carpeta en la raiz de su proyecto.

Luego de esto podra hacer el primer controlador que muestre datos de una tabla en una base de datos de prueba.

En la carpeta application/controllers cree un nuevo archivo llamado Prueba.php (que tenga la primer letra en mayuscula, convencion para el nombre de las clases). luego coloque el siguiente contenido:

```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
```
ahora crearemos la vista asociada a dicho controlador. creemos un archivo en application/views llamado prueba.php (en esta parte el nombre no tiene tanta importancia). podemos introducir un html basico o texto.
luego en el controlador creado anteriormente remplazamos el welcome_message de por prueba (no es necesario el php).

ahora tenemos que crear una ruta para poder usar nuestro controlador y nuestra vista. ahora en application/config/routes.php añadimos una linea al final.

```php
$route['prueba'] = 'prueba';
```
*Es muy importante que el controlador y la clase mantengan la convencion (primer letra en mayuscula) ya que sino no se rendizara, puede hacer la prueba cambiando el nombre vera como ahora ya no se muestra la paguina muestra un 404.

## Configurar la base de datos

Para indicarle a codeignaiter donde esta la base de datos a usar modifique el archivo en: application/config/database.php vaya a la linea donde se instanancia la variable $db.

```php
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'prueba',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```
si necesita cambiar el puerto por que tiene levantada una base de datos en docker entonces solo agrege `'port' => 3307,` al array indicando el puerto.

## Usando groserycrud



# Algunos problemas no documentados
Cuando instale por primera vez GroceryCrud puede mostrar los datos de las tablas pero no 

Grocery CRUD
=============
Grocery CRUD is a PHP and Codeigniter Framework library that creates a full functional CRUD system without the need to customise JavaScript or CSS.

For more information, visit http://www.grocerycrud.com