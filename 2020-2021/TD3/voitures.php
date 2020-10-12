<!--
 * @ Author: JunkJumper
 * @ Link: https://github.com/JunkJumper
 * @ Copyright: Creative Common 4.0 (CC BY 4.0)
 * @ Create Time: 05-10-2020 11:19:49
 * @ Modified by: JunkJumper
 * @ Modified time: 12-10-2020 10:43:41
 * -->

<?php

// Definition de la table pour servir de support
$tab_car[] = array("Renault", "Prix", "Peugeot", "Prix", "Volkswagen", "Prix");
$tab_car[] = array("Twingo", 8999, "107", 7999, "Lupo", 8549);
$tab_car[] = array("Clio", 11999, "207", 12499, "Polo", 11549);
$tab_car[] = array("Megane", 13999, "308", 14999, "Golf", 16549);
$tab_car[] = array("Laguna", 18999, "508", 19999, "Passat", 22549);

// Get Nb Maeque & Model
function GetNbMarqueModel($tab_car, &$nb_marque, &$nb_modele) {
	$nb_marque = count($tab_car[0])/2;
	$nb_modele = count($tab_car)-1;
}

// Ecriture dans fichier
function WriteTabCar2File($file_path, $tab_car) {
	global $debug_flag;
	
	if ($debug_flag) echo "<h1>Ecriture de la table voiture dans un fichier</h1>";
	
	// effacemet du fichier s'il existe
	if ( file_exists($file_path) ) {
		if ($debug_flag) echo "effacement ancien".$file_path."<br/>";
		unlink($file_path);
	}
	
	// ouverture du fichier en ecriture
	if ($debug_flag) echo "ouverture ".$file_path."<br/>";
	$fp = fopen($file_path, "w");
	if ($debug_flag) echo "pointeur de fichier fp = ".$fp."<br/>";
	
	// Ecriture du fichier CSV grace a fputcsv()
	if ( $fp != false ) {
		if ($debug_flag) echo "Ecriture dans ".$file_path." <br/>";
		
		GetNbMarqueModel($tab_car, $nb_marque, $nb_modele);
		
		// Entete table
		fputcsv($fp, $tab_car[0], "\t");
		if ($debug_flag) print_r($tab_car[0]);
		if ($debug_flag) echo "<br/>";
		
		// Lignes	
		for ($k = 1; $k <= $nb_modele; $k++) {
			fputcsv($fp, $tab_car[$k], "\t");
			
			if ($debug_flag) print_r($tab_car[$k]);
			if ($debug_flag) echo "<br/>";
		}
			
		fclose($fp);
	}  else {
		print("Impossible d'ouvrir le fichier $file_path <br/>");
		return(false);
	}
	return(true);
}

// Mapping de la table initiale vers une table formatée pour le formulaire
function MakeTable4Form($tab_car, &$nb_lig_tab_car, &$nb_marque, &$nb_modele) {
	global $debug_flag;
	$table4form = array();
	
	GetNbMarqueModel($tab_car, $nb_marque, $nb_modele);
	
	$nb_lig_tab_car = $nb_marque * ($nb_modele+1);
	if ($debug_flag) echo "nb_marque = ".$nb_marque." nb_modele = ".$nb_modele."<br/>";
	for($i=0; $i< $nb_marque; $i++ ) {
		$num_marque_ligne = $i*($nb_modele+1);
		$table4form[$num_marque_ligne][0] = $tab_car[0][2*$i];
		$table4form[$num_marque_ligne][1] = "Prix";
		if ($debug_flag) echo $num_marque_ligne." : ".$table4form[$num_marque_ligne][0]." - ".$table4form[$num_marque_ligne][1]."<br/>";

		for($j = 0; $j < $nb_modele; $j++) {
			$num_modele_ligne = $i*($nb_modele+1)+1+$j;
			$table4form[$num_modele_ligne][0] = $tab_car[$j+1][2*$i];
			$table4form[$num_modele_ligne][1] = $tab_car[$j+1][2*$i+1];
			if ($debug_flag) echo $num_modele_ligne." : ".$table4form[$num_modele_ligne][0]." - ".$table4form[$num_modele_ligne][1]."<br/>";
		}
	}
	return($table4form);
}

// Creation formulaire a partir de la table formatée pour le formulaire
function CreateForm($tab4form, $nb_modele, $nb_marque) {
	global $debug_flag;
	$formstring = "";
	$formstring = "<form action=\"voitures.php\" method=\"POST\">\n";
	$formstring .= "<table>\n";
	
	for ($i = 0; $i < $nb_marque; $i++) {
		// Marque 
		$k = $i*($nb_modele+1);
		$current_marque = $tab4form[$k][0];
		// Entete Marque
		$formstring .= "<tr>\n";
			$formstring .= "<td colspan=\"4\" align=\"center\"><b>".$current_marque."</b></td>\n";
		$formstring .= "</tr>\n";
		// Modèles de la Marque
		for ( $j=1; $j <= $nb_modele; $j++) {
			$k++;
			$formstring .= "<tr>\n";
				// Lignes formulaire
				if ($debug_flag) echo "ligne ".$k."  ".$current_marque." - modele ".$j." : modele".$k." =>".$tab4form[$k][0]."<br/>";
				$formstring .= "<input type=\"hidden\" name=\"marque".$k."\" value=\"".$current_marque."\"/>";
				$formstring .= "<td>Modele ".$j." </td><td>: <input type=\"text\" name=\"modele".$k."\" value=\"".$tab4form[$k][0]."\"/></td>";
				$formstring .= "<td>Prix </td><td>: <input name=\"prix".$k."\" value=\"".$tab4form[$k][1]."\"/></td>";
			$formstring .= "</tr>\n";
		}	
	}
	// Bouton valider
	$formstring .= "<tr>\n";
	$formstring .= "<td colspan=\"4\" align=\"center\">";
	$formstring .= "<input name=\"Valider\" type=\"submit\" />";
	$formstring .= "</center></td>";
	$formstring .= "</tr>\n";
	$formstring .= "</table>\n";
	$formstring .= "</form>";
	return($formstring);
	
}

// Copie des résultat du formulaire dans la table
function Form2TableCar($nb_modele, $nb_marque) {
	global $debug_flag;
	$nb_marque = 0;
	$k = 1;
	$tab_car[] = array();
	if ($debug_flag) echo "<h1>Creation de la table voiture apres validation formulaire</h1>";
	while (isset($_POST["marque".$k])) {
		$marque = $_POST["marque".$k];
		$tab_car[0][2*$nb_marque] = $marque;
		$tab_car[0][2*$nb_marque+1] = "Prix";
		for($j=1;$j<=$nb_modele;$j++) {
			if ($debug_flag) echo $marque." - Modele ".$j." ".$_POST["modele".$k]." - ".$_POST["prix".$k]."<br/>";
			$tab_car[$j][2*$nb_marque] = $_POST["modele".$k];
			$tab_car[$j][2*$nb_marque+1] = $_POST["prix".$k];
			$k++;
		}
		$nb_marque++;
		$k = $nb_marque*($nb_modele+1)+1;
	}
	return($tab_car);
}

?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="utf-8" />
	<title>TD3 - Génération et traitement des formulaires HTML</title>
</head>

<body>
	<h1>TD3 - Génération et traitement des formulaires HTML</h1>

	<?php
		// ###################
		// Programme principal
		// ###################
		
		// Teste si le formulaire existe sinon le générer.
		$genere_form = true;
		GetNbMarqueModel($tab_car, $nb_marque, $nb_modele);
		for ( $i = 0; $i < $nb_marque; $i++) {
			$k = $i*($nb_modele+1)+1;
			$marque = $tab_car[0][2*$i];
			if ($debug_flag)  echo "_POST[marque".$k."] = ".$_POST["marque".$k]."<br/>";
			if (isset($_POST["marque".$k])) {
				$genere_form = false;
			}
		}
		if ($debug_flag) echo "genere_form : ".$genere_form."<br/>";
		
		if ( $genere_form ) {
			// Genere formulaire
			$table4form = MakeTable4Form($tab_car, $dim_tab_car, $nb_marque, $nb_modele);
			echo CreateForm($table4form, $nb_modele, $nb_marque);	
		} else {
			echo 'Le formulaire a bien écris les données !';
			echo '<a href="./index.php">
					<button class="button blue">Retour à l\'exercice précédent </button>
				</a>';
			//Lit formulaire en cree une nouvelle table
			$new_tab_car = Form2TableCar($nb_modele, $nb_marque);
			// vérification table
			if ($debug_flag) print_r($new_tab_car);
			
			// Ecriture en fichier
			WriteTabCar2File("./voiture.txt", $new_tab_car);
		}

	?>

	<style>
		h1 {
			text-align: center;
			color: blue;
		}

		h2 {
			text-align: left;
			color: DeepSkyBlue;
		}

		p {
			font-weight: bold;
			color: grey;
		}

		br {
			line-height: 3em;
		}

		br#long {
			line-height: 10em;
		}

		strong.mandatory {
			color: red;
		}

		.button {
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}

		.blue {
			background-color: #4c6e8a;
		}
	</style>

	<p>Les champs marqués d'une <strong class="mandatory">*</strong> sont obligatoires</p>

	<a href="./index.php">
        <button class="button blue">Exo 11</button>
    </a>
	<a href="..">
        <button class="button blue">Retour à la page précédente</button>
    </a>
</body>

</html>