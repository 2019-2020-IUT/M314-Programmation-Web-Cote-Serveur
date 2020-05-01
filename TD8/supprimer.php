<?php
$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect->connect_errno) {
    die("Connexion impossible");
} else {
    echo "Connexion OK" . '<br/>';
}

$sql = "DELETE FROM  ANNUAIRE WHERE nom='" . $_POST["nom"] . "' and prenom='" . $_POST["prenom"] . "'";
if ($connect->query($sql) === TRUE && $connect->affected_rows > 0) {
    echo "Suppression OK" . '<br/>';
} else {
    echo "Erreur lors suppression : " . $connect->error;
}
