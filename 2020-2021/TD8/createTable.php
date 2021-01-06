<?php
$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect->connect_errno) {
    die("Connexion impossible");
} else {
    echo "Connexion OK";
}
$nom = "Bar";
$rechercheNom = "SELECT * from ANNUAIRE WHERE nom like'" . $nom . "%'";
$SearchPrenome = "SELECT * from ANNUAIRE WHERE nom like'" . $prenom . "%'";
$result = $connect->query($rechercheNom);
while ($r = $result->fetch_assoc()) {
    echo '<br/>' . $r["nom"] . " " . $r["prenom"] . " " . $r["numPost"] . " " . $r["id"];
}
$connect->close();
