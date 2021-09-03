<?php
$horaire =(int)readline("Veuillez indiquer votre horaire: ");

if(($horaire >= 9 && $horaire < 12) || ($horaire > 14 && $horaire < 17 )) {
    echo("le magasin est ouvert\n"); 
}
elseif($horaire !== is_int($horaire)) {
    echo("Veuillez écrire un chiffre\n");
}
    else{
        echo("le magasin est fermé\n");
    }

?>
