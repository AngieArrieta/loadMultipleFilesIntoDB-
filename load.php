<?php

     $host = "localhost";
     $user = "root";
     $pass = "";
     $bd = "prueba2";

    //conexion bd

    $conn = new mysqli($host,$user,$pass,$bd);

    if($conn->connect_error){
        die('Error en la conexion '. $conn->connect_error);
    }

    //cargar archivos

    foreach($_FILES["file"]['tmp_name'] as $key => $tmp_name){
        
        if($_FILES["file"]["name"][$key]) {

            $tmp_name = str_replace("\\","/",$tmp_name);
           echo "<h2> Insercion exitosa! </h2>";

           // carga de datos en  [db.table]
           $query = "LOAD DATA INFILE '".$tmp_name."' INTO TABLE prueba2.registroscovid FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n' IGNORE 1 ROWS ;";
           $res = $conn->query($query);
        }
    }



?>



