<?php

//Trae los datos para la conexion de un fichero externo.
include ('../../code/conn.php');

$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT * FROM area INNER JOIN sede ON sede.sede_id = area.sedeFK";
$result = mysqli_query($conn, $query);
//Bucle para mostrar todos los datos pedidos.
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $data[] = array(
        'name' => $row["nombreArea"],
        'city' => $row["sede_nom"],
    );
  }
}



header("Content-Type: application/json");
$json = json_encode($data, JSON_PRETTY_PRINT);
echo $json;
?>