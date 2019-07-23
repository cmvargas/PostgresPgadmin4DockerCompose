<?php
// detalles de la conexion
$conn_string = "host=postgres port=5432 dbname=prueba user=postgres password=12345";
 
// establecemos una conexion con el servidor postgresSQL
$dbconn = pg_connect($conn_string);
 
// Revisamos el estado de la conexion en caso de errores. 
if(!$dbconn) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
echo "Conexión exitosa\n";
}
$query = "SELECT * FROM personas";
$ciudades = pg_query($query) or die('Error: ' . pg_last_error());
$resutado = array();
while ($row = pg_fetch_assoc($ciudades)) {
   $resutado[] = $row;
}
 
http_response_code(200);
//header("Content-type:application/json");
 
// codificar la respuesta en formato JSON
echo json_encode($resutado);
// Close connection
pg_close($dbconn);
 
?>
