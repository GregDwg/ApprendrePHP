<?php
$eleves = [
    "cm1" => ["Jean", "Baptiste", "Sébastien"],
    "cm2" => ["Paul", "Pierre"]
];
foreach($eleves as $classe => $listeEleves) {
    echo "La classe $classe: \n ";
    foreach($listeEleves as $eleve) {
        echo "- $eleve\n";    

    }
    echo "\n";

}


?>