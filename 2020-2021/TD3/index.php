<!DOCTYPE html>
<?php
/**
 * @Author: JunkJumper
 * @Link: https://github.com/JunkJumper
 * @Copyright: Creative Common 4.0 (CC BY 4.0)
 * @Create Time: 05-10-2020 10:26
 * @Description: M314 - TD3
 */
?>

<html>

<head>
    <title>M314 - TD1</title>
    <link rel="icon" type="image/png" href="https://www.junkjumper-projects.com/umming_lines_paint.png" />
    <h1>M314 - TD3 : Manipulation des boucles, expressions conditionnelles et introduction aux tables globales</h1>
    <meta charset="UTF-8" />
</head>

<body>

    <p>Les champs marqués d'une <strong class="mandatory">*</strong> sont obligatoires</p>
	<form action="./check.php" method="post" name="formulaire">
		<strong class="mandatory">*</strong>Nom : <input type="text" name="formulaire[nom]" required><br />
		<strong class="mandatory">*</strong>Prenom : <input type="text" name="formulaire[prenom]" required /><br />
		<strong class="mandatory">*</strong>Email : <input type="email" name="formulaire[email]"required /><br />
		Genre :	<input type="radio" name="formulaire[genre]" value="Homme" />Homme
				<input type="radio" name="formulaire[genre]" value="Femme" />Femme
                <input type="radio" name="formulaire[genre]" value="Agenre" />Agenre
                <input type="radio" name="formulaire[genre]" value="Demi-genre" />Demi-genre
                <input type="radio" name="formulaire[genre]" value="Poly-genre" />Poly-genre
                <input type="radio" name="formulaire[genre]" value="Genderfluid" />Genderfluid
                <br />
        Vin(s) Choisi(s) : <br />
			<input type="checkbox" name ="formulaire[vins][st_emilion]" value="St_Emilion" />St Emilion <br />
			<input type="checkbox" name ="formulaire[vins][chateau_hermitage]" value="Chateau_Hermitage" />Château l’Hermitage <br />
			<input type="checkbox" name ="formulaire[vins][entre_les_deux_mers]" value="Entre_les_Deux_Mers" />Entre les Deux Mers <br />
			<input type="checkbox" name ="formulaire[vins][fitou]" value="Fitou" />Fitou <br />
			<input type="checkbox" name ="formulaire[vins][bandol]" value="Bandol" />Bandol <br />
            <input type="checkbox" name ="formulaire[vins][Cote_de_provence]" value="Cote_de_Provence" />Côte de Provence <br />
            <input type="checkbox" name ="formulaire[vins][Apple Cider]" value="Apple Cider" />Apple Cider <br />
		<input type="submit" value="Envoyer" />
	</form>

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