<?php
$connect = new mysqli($servername, $username, $password, $dbname);
if($connect->connect_errno){
    die("Connexion impossible");
}else{
    echo "Connexion OK".'<br/>';
}

$sql ="UPDATE ANNUAIRE SET numPost='".$_POST["numpost"]."' WHERE nom='".$_POST["nom"]."' and prenom='".$_POST["prenom"]."'";
if($connect->query($sql)===TRUE && $connect->affected_rows>0){
    echo "Mise à jour OK".'<br/>';
}
else{
    echo "Erreur lors de la mise à jour : ".$connect->error;
}
