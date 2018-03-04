<?php

//Trae los datos para la conexion de un fichero externo.
include ('../../code/conn.php');

$conn = mysqli_connect($servername, $username, $password, $dbname);


//Peticion de los datos que se van a mostrar en la tabla.
if ($ID !== null) {
  $query = "SELECT * FROM sede WHERE sede_id=8";
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
  
} else {
  $query = "SELECT * FROM sede INNER JOIN ciudad ON ciudad.ciudad_id = sede.ciudad_id";
  $result = mysqli_query($conn, $query);
  //Bucle para mostrar todos los datos pedidos.
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $data[] = array(
        'name' => $row["sede_nom"],
        'city' => $row["ciudad_nom"],
        'dir' => $row["sede_dir"],
        'jefe' => $row["sede_jefe"],
        'num' => $row["sede_num"],
    );
  }
}
  
}


header("Content-Type: application/json");
$json = json_encode($data, JSON_PRETTY_PRINT);
echo $json;
?>