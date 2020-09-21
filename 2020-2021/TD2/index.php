<!DOCTYPE html>
<?php
/**
 * @Author: JunkJumper
 * @Link: https://github.com/JunkJumper
 * @Copyright: Creative Common 4.0 (CC BY 4.0)
 * @Create Time: 12-09-2020 11:32:41
 * @Description: M314 - TD2
 */

$aj = "Applejack is best pony !";
$cmc = "Applebloom is Applejack's little sister, Scootaloo is Rainbow Dash's little filly; Sweatie Belle is Rarity's little sister.";
$song = "We've traveled the road of generations… Joined by a common bond; We sing our song 'cross the pony nation; From Equestria and beyond… We're Apples forever, Apples together ! We're family, but so much more ! No matter what comes, we will face the weather ! We're Apples to the core…";
$alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
$num = "0123456789";
$namesO = array (
    "mots",
    "phrases",
    "points",
    "virgules",
    "point virgules",
    "points d'exclamation",
    "points d'interrogation",
    "points de suspension"
);

function nbWord(String $s) : int {
    return sizeof(explode(" ", $s));
}

function nbSentence(String $s) : String {
    $point = explode(".", $s);
    $exc = explode("!", $s);
    $interr = explode("?", $s);
    $suspen = explode("…", $s);
    return sizeof($point)-1 + sizeof($exc)-1 + sizeof($interr)-1 + sizeof($suspen)-1;
}

function reverseSentence(String $s) : void {
    $sTab=explode(" ", $s);
    $retour="";
    for ($i=(sizeof($sTab)-1); $i >= 0; $i--) { 
        echo $sTab[$i] ." ";
    }
}

function keepOccurences(String $s) : array {
    $tabCount = array(
        0, //"mots"
        0, //"phrases"
        0, //"points"
        0, //"virgules"
        0, //"point virgules"
        0, //"exclamation"
        0, //"interrogation"
        0  //"suspension
    );
    for ($i=0; $i < strlen($s) ; $i++) { 
        switch ($s[$i]) {
            case ".":
                $tabCount[2]++;
                break;
            case ",":
                $tabCount[3]++;
                break;
            case ";":
                $tabCount[4]++;
                break;
            case "!":
                $tabCount[5]++;
                break;
            case "?":
                $tabCount[6]++;
                break;
            case "…":
                $tabCount[7]++;
                break;
            default:
                # code...
                break;
        }
    }

    $tabCount[0] = nbWord($s);
    $tabCount[1] = nbSentence($s);
    return $tabCount;
}

function generatePassword(String $s) : String {

    
    return "";
}

?>

<html>

<head>
    <title>M314 - TD1</title>
    <link rel="icon" type="image/png" href="https://www.junkjumper-projects.com/umming_lines_paint.png" />
    <h1>M314 - TD2 : Manipulation des boucles, expressions conditionnelles et introduction aux tables globales</h1>
</head>

<body>
    <p>Les deux phrases qui seront utilisées dans ce TD sont <?php echo $aj ?> et <?php echo $cmc ?> .
    
    <h2>Manipulations des chaînes de caractères et tables</h1>


    <p>1) Dans <b>"</b><?php echo $aj ?><b>"</b> il y a <?php echo nbWord($aj)?> mots.<br />
    Dans <b>"</b><?php echo $cmc ?><b>"</b> il y a <?php echo nbWord($cmc)?> mots.</p>

    <p>2) Dans <b>"</b><?php echo $aj ?><b>"</b> il y a <?php echo nbSentence($aj)?> phrase.<br />
    Dans <b>"</b><?php echo $cmc ?><b>"</b> il y a <?php echo nbSentence($cmc)?> phrases.</p>

    <p>3) <b>"</b><?php echo $aj ?><b>"</b> inversé donne <b>"</b><?php echo reverseSentence($aj)?><b>"</b>.<br />
    <b>"</b><?php echo $cmc ?><b>"</b> inversé donne <b>"</b><?php echo reverseSentence($cmc)?><b>"</b>.<br />

    <p>4) Dans <b>"</b><?php echo $aj ?><b>"</b>, il y a 
    <?php
    $tab = keepOccurences($aj);
    
    for ($i=0; $i < 8 ; $i++) { 
        echo $tab[$i] . " " . $namesO[$i] . ", ";
    }
    ?>.<br />

    Dans <b>"</b><?php echo $cmc ?><b>"</b>, il y a 
    <?php
    $tab = keepOccurences($cmc);
    
    for ($i=0; $i < 8 ; $i++) { 
        echo $tab[$i] . " " . $namesO[$i] . ", ";
    }
    ?>. <br/>

    Dans <b>"</b><?php echo $song ?><b>"</b>, il y a 
    <?php
    $tab = keepOccurences($song);
    
    for ($i=0; $i < 8 ; $i++) { 
        echo $tab[$i] . " " . $namesO[$i] . ", ";
    }
    ?>

    </p>

    <a href="..">
        <button class="button blue">Retour à la page précédente</button>
    </a>
</body>

<style>
    h1, h2, h3, h4, h5, h6 {
        color: #4c6e8a;
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

    b {
        color: red;
    }

    /* Green */
</style>


</html>