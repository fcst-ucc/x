<?php

include ('../../code/conn.php');

try {

  $jsonCont = file_get_contents('php://input');
  $content = json_decode($jsonCont, true);

  $CityID = $content['SECity'];
  $SEName = $content['SEName'];
  $SEDir = $content['SEAddress'];
  $SEBoss = $content['SEBoss'];
  $SENum = $content['SEBossNum'];

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO sede (ciudad_id, sede_nom, sede_dir, sede_jefe, sede_num)
    VALUES ('$CityID','$SEName','$SEDir','$SEBoss','$SENum')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

