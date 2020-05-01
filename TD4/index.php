<?php
$entree = "Voitures.txt";
$voitures = fopen("Voitures.txt", "r");
$lecture = file("Voitures.txt");


foreach ($lecture as $i => $lecture) {
	echo $lecture . '<br class="short" />';
}
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="utf-8" />
	<title>TD4 – Manipulation de fichiers</title>
</head>

<body>
	<h1>TD4 – Manipulation de fichiers</h1>
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

		p.table {
			font-weight: inherit;
			color: black;
		}

		br {
			line-height: 3em;
		}

		br.short {
			line-height: 1em;
		}

		br#long {
			line-height: 10em;
		}

		strong.mandatory {
			color: red;
		}

		div {
            border: 1px;
            border-color: black;
            border-style: solid;
			width: 20%;
		}
	</style>

	<div>
		<form method="post" action="upload.php">
			<ul>
				<li>
				<input type="file" name="upload" value="30000" />
				</li>
					<br class="short" />
				<li>
					<input type="submit" name="envoyer" value="Envoyer" />
				</li>
			</ul>
		</form>
	</div>



</body>

</html>