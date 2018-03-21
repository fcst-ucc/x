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
  //Este valor esta arbitrariamente definido, mientras se resuelve la creacion del modal para
  //seleccionar el lugar que se registrara...
  $GeoID = 1;
  //Divide los datos recibidos del JSON en variables unicas
  $SEName = $content['SEName'];
  $SEDir = $content['SEAddress'];
  $SEBoss = $content['SEBoss'];
  $SENum = $content['SEBossNum'];
  //Diseña la consulta para insertar cada maricada, con su respectivo valor
  $query = "INSERT INTO sede (ubicgeo_id, sede_nom, sede_dir, sede_jefe, sede_num)
    VALUES ('$GeoID','$SEName','$SEDir','$SEBoss','$SENum')";
  //Ahora si ejecuta la consulta (probablemente antes de este punto se deben hacer validaciones
  $result = mysqli_query($conn, $query);
  //Cierra la conexion, para evitar algun abuso potencial
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
//Funcion #2: Obtener la jerarquia o lista ordenada de los tipos de lugar
elseif ($function == 2) {
  //Este bebe de consulta utiliza la recursividad de dos maneras: 
  //1. Llama, si existe (el porque del Left Join), al superior en la jerarquia.
  //2. Llama, si existe (el porque del Left Join), al inferior en la jerarquia.
  //Esta consulta es altamente sensible a cambios, ya que no le he sabido sacar el jugo aun.
  $query = "SELECT 	
            tu3.tipoubicgeo_nom as padre,
            tu1.tipoubicgeo_nom as nombre, 
            tu2.tipoubicgeo_nom as hijo
            FROM tipoubicgeo tu1
            LEFT JOIN tipoubicgeo tu2
            ON tu1.tipoubicgeo_id = tu2.tipoubicgeo_padre
            LEFT JOIN tipoubicgeo tu3
            ON tu1.tipoubicgeo_padre = tu3.tipoubicgeo_id";
  //Recibe los resultados de ese chorrero de consulta.
  $result = mysqli_query($conn, $query);
  //Hace un buclesito para acomodar todo en un array, con un alias de PHP para cada atributo.
  //La primera parte de esta mierda no la entiendo honestamente, yo me limito a usarla mindlessly :v
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $data[] = array(
          //El primer alias es el nombre del atributo JSON, el segundo es el alias de SQL
          'padre' => $row["padre"],
          'nombre' => $row["nombre"],
          'hijo' => $row["hijo"],
      );
    }
  }
  //Idem
  mysqli_close($conn);
  //Idem
  header("Content-Type: application/json");
  //Idem
  $json = json_encode($data, JSON_PRETTY_PRINT);
  //Idem
  echo $json;
}
//Funcion #3: Extraer la lista de todos los lugares
elseif ($function == 3) {
  //Esta consulta obtiene la lista de lugares completa, para que JS la manipule
  $query = "SELECT 
          ug.ubicgeo_id as id, 
          ug.ubicgeo_nom as name, 
          tu.tipoubicgeo_nom as type, 
          ug.ubicgeo_padre as parent, 
          tu2.tipoubicgeo_nom as parent_type
          FROM ubicgeo ug
          LEFT JOIN ubicgeo ug2
          ON ug.ubicgeo_padre=ug2.ubicgeo_id
          INNER JOIN tipoubicgeo tu
          ON ug.tipoubicgeo_id = tu.tipoubicgeo_id
          LEFT JOIN tipoubicgeo tu2
          ON ug2.tipoubicgeo_id=tu2.tipoubicgeo_id";

  //Idem
  $result = mysqli_query($conn, $query);
  //Idem
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $data[] = array(
          //Idem
          'id' => $row["id"],
          'name' => $row["name"],
          'tipo' => $row["type"],
          'parent' => $row["parent"],
          'ptype' => $row["parent_type"]
      );
    }
  }
  //Idem
  mysqli_close($conn);
  //Idem
  header("Content-Type: application/json");
  //Idem
  $json = json_encode($data, JSON_PRETTY_PRINT);
  //Idem
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
?>