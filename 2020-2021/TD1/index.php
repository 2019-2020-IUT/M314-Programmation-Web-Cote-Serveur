<!DOCTYPE html>
<?php
/**
 * @Author: JunkJumper
 * @Link: https://github.com/JunkJumper
 * @Copyright: Creative Common 4.0 (CC BY 4.0)
 * @Create Time: 07-09-2020 10:44:25
 * @Description: M314 - TD1
 */

$x = 2;
$y = 4;
$z = 0;

$msg = "Bonjour à tous";

define("AUTHOR", "JunkJumper");
$martin = "Je m’appelle Martin";

$aj = "Applejack is best pony !";
$aj2 = '"Applejack" \'is\' best pony !';

$voitures = array(
    "Renault"    => array("Twingo", "Clio", "Megane", "Laguna"),
    "Peugeot"    => array("108", "208", "308", "508"),
    "Citroen"    => array("C1", "C2", "C3", "C4"),
    "VW"         => array("Up", "Polo", "Golf", "Passat")
);

echo "voici l'ensemble des variables de ce fichier :";

?>

<html>

<head>
    <title>M314 - TD1</title>
    <link rel="icon" type="image/png" href="https://www.junkjumper-projects.com/umming_lines_paint.png" />
</head>

<body>
    <?php echo $msg . '<br />'; ?>
    <p>Echo ne fais que ré-écrire sans interprêter une variable (comme un tableau par exemple) tout comme print alors que print_r oui.</p>
    <?php
    echo "x = " . $x . '<br />';
    echo "y = " . $y . '<br />';
    echo "z = " . $z . '<br />';
    echo "x * y = " . ($x * $y) . '<br />';
    echo '<br />';

    echo 'une chaine de caractère avec des simples cotes plus $x' . '<br />';
    echo "une chaine de caractère avec des simples cotes plus $x" . "<br />";
    echo '<br />';

    echo "Je m’appelle Martin" . " - fait en dur" . '<br />';
    echo $martin . " - fait avec une varible \$martin" . '<br />';
    echo '<br />';

    echo "==================================$aj==================================" . '<br />';

    print ('strlen() donne le nombre de char dans le String : ' . strlen($aj)) . '<br />';
    print ('strpos() donne la posisition d\'un char, par exemple le \'k\' : ' . strpos($aj, 'k')) . '<br />';
    print ('strstr() retourne un segment de la chaine à partir de la première occurrence dans la chaîne : ' . strstr($aj, "jack")) . '<br />';
    print ('substr() retourne un segment de chaîne, par exemple du char[5] au char[5]+11 : ' . substr($aj, 5, 11)) . '<br />';
    print ('str_replace() remplace toutes les occurrences dans une chaîne : ' . str_replace("Applejack", "Princess Luna", $aj)) . '<br />';
    print ('html_entity_decode() convertit les entités HTML à leurs caractères correspondant') . '<br />';
    print ('htmlentities() convertit tous les caractères éligibles en entités HTML') . '<br />';
    print_r('explode() scinde une chaîne de caractères en segments et les stocke dans un tableau : ');
    $tabExplode = explode(" ", $aj);
    print_r($tabExplode);
    echo '<br />';
    print ('addslashes() ajoute des antislashs dans une chaîne : ') . addslashes($aj2) . '<br />';
    print ('addcslashes() ajoute des slashs dans toute la chaîne selon les caractère de la chaine passé en 2nd paramètre : ') . addcslashes($aj, "epakj") . '<br />';
    ?>

    <br />

    <?php
    function DisplayVoitures($voitures) {
        $i = 0;
        $tab = "<table border=\"1\">";
        $tab .= "	<tr>";
        foreach ($voitures as $marque => $modele) {
            $t_car[$i++] = $modele;
            $tab .= "		<th>" . $marque . "</th>";
        }
        $tab .= "	</tr>";
        for ($j = 0; $j < $i; $j++) {
            $tab .= "	<tr>";
            for ($k = 0; $k < count($modele); $k++) {
                $tab .= "		<td>" . $t_car[$k][$j] . "</td>";
            }
            $tab .= "	</tr>";
        }
        $tab .= "</table>";

        return ($tab);
    }

    echo DisplayVoitures($voitures);
    ?>

    <a href="..">
        <button class="button blue">Retour à la page précédente</button>
    </a>
</body>

<style>
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

    /* Green */
</style>


</html>