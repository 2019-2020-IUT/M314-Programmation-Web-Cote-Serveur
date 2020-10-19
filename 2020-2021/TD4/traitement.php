<?php

/************************************************************
 * Partie debug *
 *************************************************************/

//Array ([discord]-[oc]-[race]-[avatar]) 
$tab = $_REQUEST;
$die = false;
$message = "";


//print_r($tab);
//echo '<br />'; //ok on recup dans $tab[nomVar]
//print_r($_FILES['fichier']);
//echo '<br />';


/************************************************************
 * Partie check valeurs *
 *************************************************************/

    $nom = strtr(
        $$_REQUEST['oc'],
        'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
        'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'
    );
    $nom = preg_replace('/([^.a-z0-9]+)/i', '-', $nom );


if($_REQUEST['oc'] == "") {
    $die = true;
    $message = $message ."Vous n'avez pas renseigné le nom de votre OC !".'<br />';
}


if($_REQUEST['race'] == "") {
    $die = true;
    $message = $message ."Vous n'avez pas renseigné une race !".'<br />';
}


/************************************************************
 * Partie gestion des images *
 *************************************************************/

$dossier = './export/';
$fichier = basename($_FILES['fichier']['name']);
$taille_maxi = 10485760;
$taille = filesize($_FILES['fichier']['tmp_name']);
$extensions = array('.png');
$extension = strrchr($_FILES['fichier']['name'], '.');




//Début des vérifications de sécurité...
if (!in_array($extension, $extensions)) { //Si l'extension n'est pas dans le tableau
    $erreur = 'Vous devez uploader un fichier de type png';
    $die = true;
}
if ($taille > $taille_maxi) {
    $erreur = 'Le fichier est trop gros...';
    $die = true;
}

if (!isset($erreur)) { //S'il n'y a pas d'erreur, on upload
    //On formate le nom du fichier ici...
    $fichier = strtr(
        $fichier,
        'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
        'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'
    );
    $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
    if (move_uploaded_file($_FILES['fichier']['tmp_name'], $dossier .$_REQUEST['oc'] .$fichier) && (!$die) ) { //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
        $path = $dossier .$_REQUEST['oc'] .$fichier;
        $message = 'Upload effectué avec succès !';
        $envoi = true;
    } else { //Sinon (la fonction renvoie FALSE).
        $message = $message .' Echec de l\'upload ! Vérifiez bien les conditions d\'envoi !';
        $die = true;
    }
} else {
    //echo $erreur;
}

/************************************************************
 * Partie export CSV *
 *************************************************************/

    //Discord;oc;race;avatar
if ($envoi) {
$write = fopen('results.csv', 'a');
        fputs($write, "\n" .$tab['discord'] .";" .$tab['oc'] .";" .$tab['race'] .";https://www.junkjumper-projects.com/FP/" .substr($path, 2));
fclose($write);
}


?>

<!--
/************************************************************
 * Partie HTML *
 *************************************************************/-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="./assets/css/display.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
    <link rel="icon" type="image/png" href="assets/images/FP.png" />

    <?php
        if($die) {
            echo '<script>setTimeout(function() {window.location.href = "index.php";}, 4975);</script>';
        } else {
            echo '<script>setTimeout(function() {window.location.href = "index.php";}, 4975);</script>';
        }
    ?>

</head>

<body>
    <div id="mid-mid">
        
        <center>
            <p>
                <?php 
                    $erreur = $erreur .$message;
                    if (!$die) {
                        echo '<img src="./assets/images/ok.gif" alt="ok" width="70%" /><br /><br />' ;
                        echo $message;
                    } else {
                        echo '<img src="./assets/images/err.png" alt="erreur" width="30%" /><br /><br />';
                        echo $erreur;
                    }
                ?>
            <br /><br />
                <div class="radial-timer s-animate">
                    <div class="radial-timer-half"></div>
                    <div class="radial-timer-half"></div>
                </div><br /><br /> Vous allez être redirigé vers la page précédente dans quelques instants<br \>
            </p>
        </center>
    </div>
</body>

</html>	