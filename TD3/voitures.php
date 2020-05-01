<?php

$voiture = array(
	"Renault" => array(
		"Twingo" => 9999,
		"Clio" => 11999,
		"Megane" => 13999,
		"Laguna"=> 18999
		),

	"Peugeot" => array(
		"107" => 8999,
		"207" => 12499,
		"308" => 14999,
		"508" => 19999
		),

	"Citroen" => array(
		"C1" => 11999,
		"C3" => 16549,
		"C4" => 22549,
		"C5" => 18999
		),
	
	"Volkswagen" => array(
		"Lupo" => 8549,
		"Polo" => 11549,
		"Golf" => 16549,
		"Passat" => 22549
		)
	);

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

	<p>Les champs marqués d'une <strong class="mandatory">*</strong> sont obligatoires</p>


    <br id="long" /><a href="./.."><button class="favorite styled" type="button">Retour à la liste des sites.</button></a>
	</body>
</html>



