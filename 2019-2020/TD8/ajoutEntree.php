<?php
$connect = new mysqli($servername, $username, $password, $dbname);
if($connect->connect_errno){
    die("Connexion impossible");
}else{
    echo "Connexion OK";
}

$insert = "INSERT INTO ANNUAIRE (nom,prenom,numPost) VALUES (?,?,?)";
$stmt = $connect->prepare($insert);
$stmt->bind_param("sss",$_POST["nom"],$_POST["prenom"],$_POST["numpost"]);
$stmt->execute();