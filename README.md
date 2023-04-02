### Manual de proceso de Instalación

- Enlace Proyecto web : https://serviceslsg.com/prueba_app/
- Enlace GitHub : https://github.dev/inventeth/pruebafinal
- Archivo base de datos Mysql: colegzjq_comisionvendedor.sql
- Archivo de conexion: /pruebafinal/incluir/connection.php

- Se edita el archivo connection.php

```sql
<?php
$dsn = 'mysql:host=localhost;dbname=colegzjq_comisionvendedor'; -- Nombre de Base de datos
$username = 'colegzjq_comisionvendedor'; --Usuario Base de Datos
$password = 'sunm1cr0$$$';  -- Contraseña BD
$db = new PDO($dsn, $username, $password);
$db->exec("set names utf8");
?>

```

- Se debe de ingresar a la ruta https://github.dev/inventeth/pruebafinal/index.php;
- Usuario: inventeth@gmail.com
- Contraeña: 12345

# Autor : 
## Juan Carlos Ruiz Hoyos