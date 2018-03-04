<?php

//Aspectos de conexion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fcst";

// Este visaje funciona con Node.JS, o con alguna manera de generar ficheros de JSON
  try {
    
    $jsonCont= file_get_contents('test.json');
    $content= json_decode($jsonCont, true);
    
    $CityID=$content['must']['JSON_cityId'];
    $SEName=$content['must']['JSON_SEName'];
    $SEDir=$content['optional']['JSON_SEDir'];
    $SEBoss=$content['optional']['JSON_SEBoss'];
    $SENum=$content['optional']['JSON_SENum'];
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO sede (ciudad_id, sede_nom, sede_dir, sede_jefe, sede_num)
    VALUES ('$CityID','$SEName','$SEDir','$SEBoss','$SENum')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>