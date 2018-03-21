<?php

//Trae los datos para la conexion del fichero central
include ('../../code/conn.php');
//Recibe los datos JSON que vienen en camino
$jsonCont = file_get_contents('php://input');
//Decodifica y guarda los datos en un variable (array)
$content = json_decode($jsonCont, true);
//Saca la variable mas importante de todas: que funcion desea invocar
$function = $content['function'];
//Inicia la conexion (que tan buena idea es dejar la conexion "normalizada"?)
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Funcion #1: Crear el registro en la BD
if ($function == 1) {
  //Aqui recibe el codigo (del item a actualizar) que le envio la tabla
  $ID = $content['id'];
  //Peticion de los datos que se van a mostrar en la tabla.
  $query = "SELECT * FROM sede WHERE sede_id='$ID'";
  //Ahora si ejecuta la consulta (probablemente antes de este punto se deben hacer validaciones
  $result = mysqli_query($conn, $query);
  //Hace un buclesito para acomodar todo en un array, con un alias de PHP para cada atributo
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $data[] = array(
          //El primer alias es el nombre del atributo JSON, el segundo es el alias de SQL
          'name' => $row["sede_nom"],
          'dir' => $row["sede_dir"],
          'jefe' => $row["sede_jefe"],
          'num' => $row["sede_num"],
      );
    }
  }
  //Cierra la conexion, para evitar algun abuso potencial
  mysqli_close($conn);
  //Un mero formalismo, estoy casi seguro que el envio no se afecta evitando esto
  header("Content-Type: application/json");
  //Agarra el array y lo transforma en una forma legible para un humano (JSON_Pretty...)
  $json = json_encode($data, JSON_PRETTY_PRINT);
  //Devuelve el JSON (paso necesario para que "success: X" de AJAX se ejecute)
  echo $json;
}
//Funcion #2: Actualiza los datos de la BD con los datos ingresados en el formulario
elseif ($function == 2) {
  //Divide los datos recibidos del JSON en variables unicas
  $ID = $content['id'];
  $SEName = $content['SEName'];
  $SEDir = $content['SEAddress'];
  $SEBoss = $content['SEBoss'];
  $SENum = $content['SEBossNum'];
  //Diseña la consulta para insertar cada maricada, con su respectivo valor
  $query = "UPDATE sede SET 
            sede_nom = '$SEName', 
            sede_dir = '$SEDir', 
            sede_jefe = '$SEBoss', 
            sede_num = '$SENum' 
            WHERE sede.sede_id = '$ID'";
  //Ahora si ejecuta la consulta (probablemente antes de este punto se deben hacer validaciones
  $result = mysqli_query($conn, $query);
  //Cierra la conexion, para evitar algun aviso potencial
  mysqli_close($conn);
  //Si la consulta se realizo correctamente, envia un pinche 1 de vuelta, codificado como un JSON
  if ($result) {
    //Un mero formalismo, estoy casi seguro que el envio no se afecta evitando esto
    header("Content-Type: application/json");
    //Crea un array de PHP
    $data = array();
    //Le mete el datico que desea enviar (esto potencialmente se puede hacer mas elaborado
    $data['status'] = 1;
    //Agarra el array y lo transforma en una forma legible para un humano (JSON_Pretty...)
    $json = json_encode($data, JSON_PRETTY_PRINT);
    //Devuelve el JSON (paso necesario para que "success: X" de AJAX se ejecute)
    echo $json;
  }
}
//Ultima funcion: Debido a que el codigo, por seguridad, debe estar altamente ofuscado, 
//quien entre directamente a cualquiera de TODOS los ficheros PHP del proyecto vera esto.
else {
  echo "<center>";
  echo "<h1>You shouldn't be here, intruder.<h1>";
  echo "<br><img src='https://media.giphy.com/media/uWA6MpSYgAWFKUxrW1/giphy.gif' alt='GTFO'>";
  echo "</center>";
}
?>