<?php

//Trae los datos para la conexion de un fichero externo.
include ('../../code/conn.php');

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Step No. 2: Extracting data from database
$query = "SELECT * FROM sede";
$res = mysqli_query($connect, $query) or die("Query Not Executed " . mysqli_error($connect));

//Step No. 3: Putting the fetched data in Arrays
$data_array = array();
while ($rows = mysqli_fetch_array($res)) {
  $data_array[] = $rows;
}
var_dump($data_array);

//Step No. 4 and 5: Encoding Array into JSON + Writing data to JSON file
$fp = fopen('visaje.json', 'w');
//fwrite($fp, json_encode($data_array));
if (!fwrite($fp, json_encode($data_array, JSON_PRETTY_PRINT))) {
  die('Error : File Not Opened. ' . mysqli_error());
} else {
  echo "Data Retrieved Successully!!!";
} fclose($fp);
?>