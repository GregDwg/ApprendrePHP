<?php

// Création d'un script qui permet d'entrer les horaires d'ouverture d'un magasin, puis de vérifier les horaires, grâce à l'utilisation de boucles. 

// Pseudo code : 
// demander l'heure d'ouverture à l'utilisateur; 
// demander l'heure de fermeture à l'utilisateur; 
// demander à l'utilisateur s'il veut entrer un nouveau créneau;
// vérfier que l'heure d'ouverture soit < à l'heure de fermeture; 
// si l'heure d'ouveture est < à l'heure de fermeture.  
//      intégrer les heures d'ouverture et de fermeture dans un tableau. 
// demander une heure pour vérifier que le script fonctionne bien. 

    while(true) {
        $ouverture = (int)readline("Veuillez entrer une heure d'ouverture: ");
        $fermeture = (int)readline("Veuillez entrer une heure de fermeture: ");
        if($ouverture >= $fermeture) {
            echo("Le créneau ne peux pas être enregistré, car l'heure d'ouverture ($ouverture) est supérieur à l'heure de fermeture. \n");
        }
        else {
            $creneaux[] = [$ouverture, $fermeture];
            $action = readline("Voulez vous entrer un nouveau créneau ? (o/n) : ");
            if($action === 'n'){
            break;
            }
        }

    } 
   
    
    $heure = (int)readline("Veuillez entrer une heure de visite: \n");
    $creneauTrouve = false; 
    foreach($creneaux as $creneau) {
        if($heure >= $creneau[0] && $heure <= $creneau[1]) {
            $creneauTrouve = true;
            break;

        }
    }

    if($creneauTrouve) {
        echo("Le magasin sera ouvert");
    }else{
            echo("le magasin est fermé");
    }

    

?>
