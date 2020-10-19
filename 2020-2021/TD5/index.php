<!DOCTYPE html>
<?php
/**
 * @Author: JunkJumper
 * @Link: https://github.com/JunkJumper
 * @Copyright: Creative Common 4.0 (CC BY 4.0)
 * @Create Time: 05-10-2020 10:26
 * @Description: M314 - TD3
 */


$entree = "./Voitures.txt";

function openFile($input) {
    $voitures = fopen($input, "r");
    $lecture = file($input);
}

function closeFile($input) {
    fclose($input);
}

function displayLines($input) {
    openFile($input);

    while(! feof($input)) {
        $line = fgets($input);
        echo $line. '<br />';
    }
}

?>

<html>

<head>
    <title>M314 - TD5</title>
    <link rel="icon" type="image/png" href="https://www.junkjumper-projects.com/umming_lines_paint.png" />
    <h1>M314 - TD5 – Manipulation de sessions, cookies et mails</h1>
    <meta charset="UTF-8" />
</head>

<?php
    echo displayLines($entree);
?>

<body>
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

	strong.mandatory {
		color : red;
	}
</style>


</html>