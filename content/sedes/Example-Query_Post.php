<?php

//Aspectos de conexion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fcst";

// Aun experimental, requiere cambios y/o refinamiento.
  try {
    
    $CityID=$_POST["ciudadList"];
    $SEName=$_POST["sedeName"];
    $SEDir=$_POST["sedeAddress"];
    $SEBoss=$_POST["sedeBoss"];
    $SENum=$_POST["sedeNum"];
    
    
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