<?php

//Trae los datos para la conexion de un fichero externo.
include ('../../code/conn.php');
$conn = mysqli_connect($servername, $username, $password, $dbname);

$jsonCont = file_get_contents('php://input');
$content = json_decode($jsonCont, true);
$ID = $content['id'];


//Peticion de los datos que se van a mostrar en la tabla.
$query = "DELETE FROM area WHERE codArea='$ID'";
$result = mysqli_query($conn, $query);

mysqli_close($conn);
