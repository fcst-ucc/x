<?php

//Trae los datos para la conexion de un fichero externo.
include ('../../code/conn.php');

$jsonCont = file_get_contents('php://input');
$content = json_decode($jsonCont, true);
$conn = mysqli_connect($servername, $username, $password, $dbname);
$ID = $content['id'];

//Peticion de los datos que se van a mostrar en la tabla.
$query = "SELECT * FROM sede WHERE sede_id='$ID'";
$result = mysqli_query($conn, $query);
//Bucle para mostrar todos los datos pedidos.
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $data[] = array(
        'name' => $row["sede_nom"],
        'city' => $row["ciudad_id"],
        'dir' => $row["sede_dir"],
        'jefe' => $row["sede_jefe"],
        'num' => $row["sede_num"],
    );
  }
}

header("Content-Type: application/json");
$json = json_encode($data, JSON_PRETTY_PRINT);
echo $json;

?>