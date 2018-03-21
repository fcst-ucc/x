<?php

//Trae los datos para la conexion de un fichero externo.
include ('../../code/conn.php');
//Recibe los datos JSON que vienen en camino
$jsonCont = file_get_contents('php://input');
//Decodifica y guarda los datos en un variable (array)
$content = json_decode($jsonCont, true);
//Saca la variable mas importante de todas: que funcion desea invocar
$function = $content['function'];
//Inicia la conexion (que tan buena idea es dejar la conexion "normalizada"?)
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Funcion #1: Consultar todos los datos de la tabla
if ($function == 1) {
  //Peticion de los datos que se van a mostrar en la tabla.
  $query = "SELECT * FROM sede INNER JOIN ubicgeo ON ubicgeo.ubicgeo_id = sede.ubicgeo_id";
  //Ahora si ejecuta la consulta (probablemente antes de este punto se deben hacer validaciones
  $result = mysqli_query($conn, $query);
  //Hace un buclesito para acomodar todo en un array, con un alias de PHP para cada atributo
  //Nota: debido a convenciones de DataTable, los keys deben ser el consecutivo de las columnas
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $data[] = array(
          '0' => $row["sede_id"],
          '1' => $row["sede_nom"],
          '2' => $row["ubicgeo_nom"],
          '3' => $row["sede_dir"],
          '4' => $row["sede_jefe"],
          '5' => $row["sede_num"],
      );
    }
  }
  //Esto le añade la cabecera data al JSON, pero de momento se encuentra en desuso
//  $res['data'] = $data;
  //Cierra la conexion, para evitar algun abuso potencial
  mysqli_close($conn);
  //Un mero formalismo, estoy casi seguro que el envio no se afecta evitando esto
  header("Content-Type: application/json");
  //Agarra el array y lo transforma en una forma legible para un humano (JSON_Pretty...)
  $json = json_encode($data, JSON_PRETTY_PRINT);
  //Devuelve el JSON (paso necesario para que "success: X" de AJAX se ejecute)
  echo $json;
}
//Ultima funcion: Debido a que el codigo, por seguridad, debe estar altamente ofuscado, 
//quien entre directamente a cualquiera de TODOS los ficheros PHP del proyecto vera esto.
else {
  echo "<center>";
  echo "<h1>You shouldn't be here, intruder.<h1>";
  echo "<br><img src='https://media.giphy.com/media/uWA6MpSYgAWFKUxrW1/giphy.gif' alt='GTFO'>";
  echo "</center>";
}