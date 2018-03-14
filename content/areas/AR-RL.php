<?php

include ('../../code/conn.php');

try {

  $jsonCont = file_get_contents('php://input');
  $content = json_decode($jsonCont, true);

  $ARName = $content['ARName'];
  $ARSede = $content['ARSede'];

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO area (nombreArea, sedeFK)
    VALUES ('$ARName','$ARSede')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn -> null;