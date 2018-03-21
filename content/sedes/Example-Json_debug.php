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
$res = mysqli_query($conn, $query) or die("Query Not Executed " . mysqli_error($conn));

//Step No. 3: Putting the fetched data in Arrays
$data_array = array();
while ($row = mysqli_fetch_array($res)) {
    $data[] = array(
        '0' => $row["sede_id"],
        '1' => $row["sede_nom"],
        '2' => $row["ciudad_id"],
        '3' => $row["sede_dir"],
        '4' => $row["sede_jefe"],
        '5' => $row["sede_num"],
    );
}

//Step No. 4 and 5: Encoding Array into JSON + Writing data to JSON file
$fp = fopen('visaje.json', 'w');
//fwrite($fp, json_encode($data_array));
if (!fwrite($fp, json_encode($data, JSON_PRETTY_PRINT))) {
  die('Error : File Not Opened. ' . mysqli_error());
} else {
  echo "Data Retrieved Successully!!!";
} fclose($fp);
?>