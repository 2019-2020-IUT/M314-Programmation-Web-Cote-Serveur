<html>

<style>

        p {
            font-weight: bold;
            color : grey;
            text-align : center;
        }

        p#rep {
            font-weight: bold;
            color : red;
            text-align : center;
        }

    </style>

<link href="./anim.css" rel="stylesheet">
    <?php
    $checkN = false;
    $checkE = false;
    $tab = $_REQUEST['formulaire'];
    $vins = "";

    if(preg_match("#[a-zA-Z_]#", $tab['nom']) && preg_match("#[a-zA-Z_]#",$tab['prenom'])) {
        $checkN = true;
    }

    if(preg_match("#@#", $tab['email']) && preg_match("#.#",$tab['email']) && preg_match("#[a-zA-Z]{2}@#", $tab['email']) && preg_match("#@[a-zA-Z]{2}.#",$tab['email'])) {
        $checkE = true;
    }

    if($checkN) {
        foreach ($tab['vins'] as $key => $valeur) {
			$vins = $valeur .'&nbsp,&nbsp';
        }
        
        echo '<p>Votre nom est : ' .$tab['nom'] .'</p>';
        echo '<p>Votre prenom est : ' .$tab['prenom'] .'</p>';
        if ($tab['sexe'] != null) {echo '<p>Votre sexe est : ' .$tab['sexe'] .'</p>';}
        if ($vins != null) {echo '<p>Votre sélection de vin(s) est : ' .$vins .'</p>';}
    } else {
        echo '<p>Votre nom ou prénom n\'est pas correct.</p>';
    }

    if($checkE) {
        echo '<p>Votre mail est : ' .$tab['email'] .'</p>';
    } else {
        echo '<p>Votre email n\'est pas correct.</p>';
    }

    if($checkE && $checkN) {
        echo '<p id="rep">Bonjour ' .$tab['nom'] .' ' .$tab['prenom'] .',<br /> 
        Nous vous remercions d’avoir commandé ' .$vins .'<br />'
        .'Un mail de conformation vous a été envoyé à l’adresse : ' .$tab['email'] .'</p>';
    }


?>
<br /><br /><br /><br /> <center><div class="radial-timer s-animate"> <div class="radial-timer-half"></div> <div class="radial-timer-half"></div></center>
    <script>
    setTimeout(function () {
        window.location.href = "./index.php";
    }, 3000);
    </script>
</html>