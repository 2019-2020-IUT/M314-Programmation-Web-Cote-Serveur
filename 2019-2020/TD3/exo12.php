<?php 

$send = false;

if ($_REQUEST != null) {
	$send = true;
}
?>

<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset ="utf-8" />
		<title>TD3 - Génération et traitement des formulaires HTML</title>
	</head>

	<body>
    <h1>TD3 - Génération et traitement des formulaires HTML</h1>

    <style>
        h1 {
            text-align: center;
            color : blue;
        }

        h2 {
            text-align: left;
            color : DeepSkyBlue ;
        }

        p {
            font-weight: bold;
            color : grey;
        }

		br {
			line-height : 3em;
		}

		br#long {
			line-height : 10em;
		}

		strong.mandatory {
			color : red;
		}
    </style>

<?php
//Array ( [formulaire] => Array ( [nom] => srifi [prenom] => jose [email] => jose.srifi@gmail.com [sexe] => Homme [vins] => Array ( [st_emilion] => St_Emilion ) ) )

	if($send) {

		echo 'Votre nom est : ' .$_REQUEST['formulaire']['nom'] .'<br />';
		echo 'Votre prenom est : ' .$_REQUEST['formulaire']['prenom'] .'<br />';
		echo 'Votre mail est : ' .$_REQUEST['formulaire']['email'] .'<br />';
		echo 'Votre sexe est : ' .$_REQUEST['formulaire']['sexe'] .'<br />';
		echo 'Votre sélection de vin(s) est : ' ;
		foreach ($_REQUEST['formulaire']['vins'] as $key => $valeur) {
			echo "$valeur" .'&nbsp, ';
		}

		echo '<br id="long" /><a href="./exo12.php"><button class="favorite styled" type="button">Reset</button></a>';
	} else {
		
		echo '	<p>Les champs marqués d\'une <strong class="mandatory">*</strong> sont obligatoires</p>
		<form action="./exo12.php" method="post" name="formulaire">
		<strong class="mandatory">*</strong>Nom : <input type="text" name="formulaire[nom]"><br />
		<strong class="mandatory">*</strong>Prenom : <input type="text" name="formulaire[prenom]" required /><br />
		<strong class="mandatory">*</strong>Email : <input type="email" name="formulaire[email]"required /><br />
		Sexe : 	<input type="radio" name="formulaire[sexe]" value="Homme" />Homme
				<input type="radio" name="formulaire[sexe]" value="Femme" />Femme
				<input type="radio" name="formulaire[sexe]" value="Autre" />Autre(s)<br />
		Vin(s) Choisi(s) : 
			<input type="checkbox" name ="formulaire[vins][st_emilion]" value="St_Emilion" />St Emilion
			<input type="checkbox" name ="formulaire[vins][chateau_hermitage]" value="Chateau_Hermitage" />Château l’Hermitage
			<input type="checkbox" name ="formulaire[vins][entre_les_deux_mers]" value="Entre_les_Deux_Mers" />Entre les Deux Mers
			<input type="checkbox" name ="formulaire[vins][fitou]" value="Fitou" />Fitou
			<input type="checkbox" name ="formulaire[vins][bandol]" value="Bandol" />Bandol
			<input type="checkbox" name ="formulaire[vins][cote_de_provence]" value="Cote_de_Provence" />Côte de Provence<br />
		<input type="submit" value="Envoyer" />
	</form>';

	}
?>


    <br id="long" /><a href="./.."><button class="favorite styled" type="button">Retour à la liste des sites.</button></a>
	</body>
</html>



