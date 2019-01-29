<?php

$connect = new PDO("mysql:host=localhost;dbname=tutorial", "root", "");

$query = "SELECT * FROM tb_uf";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

$uf = array();

 foreach($result as $row)
 {
 	array_push($uf, array("sigla"=>$row["cd_uf"],
 						  "nome"=>$row["nm_uf"],
 						  "uf"=>$row["cd_uf"].' - '.$row["nm_uf"]));
 }

 echo json_encode($uf);


?>