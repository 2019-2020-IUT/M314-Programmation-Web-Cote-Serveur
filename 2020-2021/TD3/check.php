<!--
    @ Author: JunkJumper
    @ Link: https://github.com/JunkJumper
    @ Copyright: Creative Common 4.0 (CC BY 4.0)
    @ Create Time: 05-10-2020 10:29:32
    @ Modified by: JunkJumper
    @ Modified time: 05-10-2020 10:51:10
-->

<html>

<style>
    p {
        font-weight: bold;
        color: grey;
        text-align: center;
    }

    p#rep {
        font-weight: bold;
        color: red;
        text-align: center;
    }
</style>

<link href="./anim.css" rel="stylesheet">
<?php
$checkN = false;
$checkE = false;
$tab = $_REQUEST['formulaire'];
$tVins = $tab['vins'];
$vins = "";
$denom = "Damoixe";

print_r($tVins);

if ($tab['genre'] == "Homme") {
    $denom = "Monsieur";
} else if ($tab['genre'] == "Femme") {
    $denom = "Madamme";
}

if (preg_match("#[a-zA-Z_]#", $tab['nom']) && preg_match("#[a-zA-Z_]#", $tab['prenom'])) {
    $checkN = true;
}

if (preg_match("#@#", $tab['email']) && preg_match("#.#", $tab['email']) && preg_match("#[a-zA-Z]{2}@#", $tab['email']) && preg_match("#@[a-zA-Z]{2}.#", $tab['email'])) {
    $checkE = true;
}

if ($checkN) {
    foreach ($tab['vins'] as $key => $valeur) {
        $vins = $vins. $valeur . ', ';
    }

    echo '<p>Votre nom est : ' . $tab['nom'] . '</p>';
    echo '<p>Votre prenom est : ' . $tab['prenom'] . '</p>';
    if ($tab['sexe'] != null) {
        echo '<p>Votre genre est : ' . $tab['genre'] . '</p>';
    }
    if ($vins != null) {
        $v = substr($vins, 0, strlen($vins) - 2);
        echo '<p>Votre sélection de vin(s) est : ' . $v . '</p>';
    }
} else {
    echo '<p>Votre nom ou prénom n\'est pas correct.</p>';
}

if ($checkE) {
    echo '<p>Votre mail est : ' . $tab['email'] . '</p>';
} else {
    echo '<p>Votre email n\'est pas correct.</p>';
}

if ($checkE && $checkN) {
    echo '<p id="rep">Bonjour ' . $denom . ' ' . $tab['nom'] . ' ' . $tab['prenom'] . ',<br /> 
        Nous vous remercions d’avoir commandé ' . $v . '<br />'
        . 'Un mail de conformation vous a été envoyé à l’adresse : ' . $tab['email'] . '</p>';
}


?>
<br /><br /><br /><br />
<center>
    <div class="radial-timer s-animate">
        <div class="radial-timer-half"></div>
        <div class="radial-timer-half"></div>
</center>
<script>
    setTimeout(function() {
        window.location.href = "./index.php";
    }, 5000);
</script>

</html>