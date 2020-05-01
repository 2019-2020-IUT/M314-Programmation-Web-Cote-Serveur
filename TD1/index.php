<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<?php
			$x = 2;
			$y = 4;
			$z = 0;
			$i = 0;
			$msg = "Bonjour à tous";
			define("AUTHOR", "JunkJumper");

			$aj = "Applejack is best pony !";
			$p ='p';

			$chaine1 = 'une chaine de charatères';
			$chaine2 = "deux chaines de charatères";
			$martin = "« Je m’appelle Martin »";

			$voiture = array(
				"Renault" => array("Twingo", "Clio", "Megane", "Laguna"),
				"Peugeot" => array(107, 207, 308, 508),
				"Citroen" => array("C1", "C3", "C4", "C5"),
				"Volkswagen" => array("Lupo", "Polo", "Golf", "Passat")
			);

		?>
		<meta charset ="utf-8" />
		<title>TD1</title>
	</head>

	<body>

		<h1>Titre 1</h1>
		<p>Paragraphe. <?php echo $msg?>
		<br />
		<?php echo AUTHOR ?>
		<br />
		La différence entre <code>echo</code> et <code>print</code> est que echo ne renvoie rien alors que print renvoi un entier.
		
		<?php
		
		echo "x = " .$x;echo '<br />';
		echo "y = " .$y;echo '<br />';
		echo "z = " .$z;echo '<br />';
		echo "x * y = " .($x * $y);echo '<br />';

		echo 'chaine avec \' pour ouvirer et fermer';echo '<br />';
		echo "chaine avec \" pour ouvirer et fermer";echo '<br />';

		echo $martin;echo '<br />';
		echo "« Je m’appelle Martin »";echo '<br />';
		
		echo "==================================$aj==================================";echo '<br />';

		print('strlen() donne le nombre de char dans le String : ' .strlen($aj));echo '<br />';
		print('strpos() donne la posisition d\'un char, par exemple le \'k\' : ' .strpos($aj, 'k'));echo '<br />';
		print('strstr() trouve la première occurrence dans une chaîne : ' .strstr($aj, "jack"));echo '<br />';
		print('substr() retourne un segment de chaîne, par exemple du char[5] au char[5]+11 : ' .substr($aj, 5, 11));echo '<br />';
		print('str_replace() remplace toutes les occurrences dans une chaîne : ' .str_replace("Applejack", "Twilight Sparkle", $aj));echo '<br />';
		print('html_entity_decode() convertit les entités HTML à leurs caractères correspondant');echo '<br />';
		print('htmlentities() convertit tous les caractères éligibles en entités HTML');echo '<br />';
		//print('explode() scinde une chaîne de caractères en segments : ' .explode(" ", $aj));echo '<br />';
		print('addslashes() ajoute des antislashs dans une chaîne');echo '<br />';
		
		/*
		foreach($voiture as $key=>$value) {
			foreach($value as $key2=>$valeur) {
				print($valeur);
				if(i == 4) {
					echo '<br />';
					$i = 0;
				}
				$i++;
			}
		}*/
			
		?>

		

		</p>
		<a href="https://linserv-info-01.iutnice.unice.fr/~sj801446/"><button class="favorite styled" type="button">Retour à laliste des sites.</button></a>

		



	</body>
</html>
