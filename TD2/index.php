<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset ="utf-8" />
		<title>TD2 - Manipulation des boucles, expressions conditionnelles et introduction aux tables globales</title>
            <?php
                $aj = "Applejack is best pony.";
                $cmc = "Applebloom is Applejack's little sister. Scootaloo is Rainbow Dash's little filly. Sweatie Belle is Rarity's little sister.";
            ?>
	</head>

	<body>
    <h1>TD2 - Manipulation des boucles, expressions conditionnelles et introduction aux tables globales.</h1>

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
            color : red;
        }
    </style>

        <?php
            echo '<h2>1 - Manipulations des chaînes de caractères et tables</h2>';

            echo '<p>1.1 :</p>';
            echo "Le nombre de mot dans la phrase \"" .$aj ."\" est " .sizeof(explode(" ", $aj)) ."." .'<br />';
            echo "Le nombre de mot dans la phrase \"" .$cmc ."\" est " .sizeof(explode(" ", $cmc)) ."." .'<br />'; echo '<br />';

            echo '<p>1.2 :</p>';
            echo "Le nombre phrases dans le texte \"" .$aj ."\" est " .(sizeof(explode(".", $aj))-1) ."." .'<br />';
            echo "Le nombre phrases dans le texte \"" .$cmc ."\" est " .(sizeof(explode(".", $cmc))-1) ."." .'<br />';

            echo '<p>1.3 :</p>';
                $temp = explode(" ", $aj);
                $aj2 = "";
    
                for ($i=(sizeof($temp)-1); $i >= 0; $i--) { 
                    $aj2 = $aj2 .$temp[$i] ." ";
                }

                $temp2 = explode(" ", $cmc);
                $cmc2 = "";
    
                for ($i=(sizeof($temp2)-1); $i >= 0; $i--) { 
                    $cmc2 = $cmc2 .$temp2[$i] ." ";
                }

            echo "Le texte \"" .$aj ."\", une fois inversé donne :\"" . substr($aj2, 0, -1)."\"." .'<br />';
            echo "Le texte \"" .$cmc ."\", une fois inversé donne :\"" . substr($cmc2, 0, -1)."\"." .'<br />';

            echo '<p>1.4 :</p>';





        ?>
    <a href="https://linserv-info-01.iutnice.unice.fr/~sj801446/"><button class="favorite styled" type="button">Retour à laliste des sites.</button></a>
	</body>
</html>



