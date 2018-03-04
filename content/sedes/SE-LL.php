<?php

//Trae los datos para la conexion de un fichero externo.
include ('../../code/conn.php');

$conn = mysqli_connect($servername, $username, $password, $dbname);
//Peticion de los datos que se van a mostrar en la tabla.
$query = "SELECT * FROM sede INNER JOIN ciudad ON ciudad.ciudad_id = sede.ciudad_id";
$result = mysqli_query($conn, $query);

//Bucle para mostrar todos los datos pedidos.
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $data[] = array(
        '0' => $row["sede_id"],
        '1' => $row["sede_nom"],
        '2' => $row["ciudad_nom"],
        '3' => $row["sede_dir"],
        '4' => $row["sede_jefe"],
        '5' => $row["sede_num"],
    );
  }
}

mysqli_close($conn);

$res['data'] = $data;
header("Content-Type: application/json");
$json = json_encode($res, JSON_PRETTY_PRINT);
echo $json;