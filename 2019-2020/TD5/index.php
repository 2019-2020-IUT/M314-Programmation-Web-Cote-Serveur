<?php
$retour = true;
function mkd(String $s) {
	mkdir ($s);
	echo "Répertoire " .$s ." créé avec succes\n";
}

function rmd(string $s) {
	rmdir($s);
	echo "Répertoire " .$s ." supprimé avec succes\n";
}

function mvd(string $s, String $d) {
	rename($s, $d);
	echo "Répertoire " .$s ." renommé en " .$d ." avec succes\n";
}

function listD(String $s) {
	echo 'Affichage de tous les fichier en ' .$s .': <br />';
	$file = glob("./*" .$s);
	foreach($file as $filename) {
		print_r(substr($filename, 2) .'<br />');
	}
}

function ecrit(String $f,String $s) {
	$write = fopen($f,'a');
        fputs($write, $s);
	fclose($write);
}

function perms(String $f , int $m) {
	chmod($f, $m);
}

function tree(String $s) {
	$dir = scandir($s);

	for ($i=0; $i < count($dir); $i++) { 
		if (is_file($dir[$i])) {
			echo $dir[$i] .'<br />';
		}
	}
/**
 * else {
			tree($dir[$i]);
		}
 */
	//print_r($dir);
}

//rmd("oc1");
//mkd("oc");
//mvd("oc", "oc1");
//rmd("oc1");

listD("txt");
//ecrit("./a.txt", "Applejack is best pony");
perms("a.txt", 0700);

echo '<br /><br /><br /><br /><br />';

tree(".");
