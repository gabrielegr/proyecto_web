
<?php

$conn_string = "host=localhost port=5432 dbname=proyecto_web user=admin password=root options='--client_encoding=UTF8'";
$dbconn = pg_connect($conn_string);
if(!$dbconn) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
echo "Conexión exitosa\n";
}
pg_close($dbconn);
 
?>