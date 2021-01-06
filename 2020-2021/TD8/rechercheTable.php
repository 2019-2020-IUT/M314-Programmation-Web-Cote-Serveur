<?php
$connect = new mysqli($servername, $username, $password, $dbname);
if($connect->connect_errno){
    die("Connexion impossible");
}else{
    echo "Connexion OK";
}
$nom="Bar";
$rechercheNom = "SELECT * from ANNUAIRE WHERE nom like'". $_POST["nom"]."%'";
$recherchePrenom = "SELECT * from ANNUAIRE WHERE nom like'".$_POST["prenom"]."%'";
$rechercheNomEtPrenom= "SELECT * from ANNUAIRE WHERE prenom like'".$_POST["prenom"]."%' and nom like'". $_POST["nom"]."%'";
if(!empty($_POST["prenom"]) && !empty($_POST["nom"])){
    $result = $connect->query($rechercheNomEtPrenom);
}
elseif (!empty ($_POST["prenom"])) $result = $connect->query($recherchePrenom);
elseif ( !empty ($_POST["nom"])) $result = $connect->query($rechercheNom);
echo '<br/>'."Resultat de la recherche";
while($r=$result->fetch_assoc()) {
    echo '<br/>'.$r["nom"]." ".$r["prenom"]." ".$r["numPost"]." ".$r["id"];
}







$connect->close();

