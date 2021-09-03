<?php

// <---------- Enoncé ---------->
// Création d'un petit script qui demande à l'utilisateur d'entrer une commande parmis plusieurs choix. 


// <---------- Version avec l'utilisation de conditions ("IF", "ELSEIF" et "ELSE") ----------> : 

$action = (int)readline("Veuillez entrer une valeur (1: j'attaque, 2: je défends, 3: je passe mon tour) : ");
    if ($action === 1) {
        echo("J'attaque\n");
    }    

    elseif ($action === 2) {
        echo("Je défends\n"); 
    }

    elseif ($action === 3) {
        echo("Je passe mon tour\n"); 
    }

    else {
        echo ("Je ne comprends pas cette commande !\n");
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    

// <---------- Version avec l'utilisation de SWITCH) ----------> : 


// Même script mais j'ai remplacé les conditions "if", "elseif" et "else" par "switch" et "case". 

$action = (int)readline("Veuillez entrer une valeur (1: j'attaque, 2: je défends, 3: je passe mon tour) : ");

switch($action) {
    case 1: 
        echo("j'attaque \n"); 
        break;
    case 2: 
        echo ("Je défends \n");
        break;

    case 3: 
        echo ("Je passe mon tour \n");
        break;    
    
    default: 
    echo ("Je ne comprends pas cette commande ! \n");
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    


//  <---------- PENSE-BÊTE  ----------> :


//  <---------- SWITCH ---------->
// 1. "SWITCH" fonctionne avec "CASE"
// 2. "CASE" permet de mettre la valeur directement après "CASE" et est substituable à une construction en "IF"


//  <---------- BREAK ---------->
// "break" permet de s'arrêter à chaque case, car après avoir fait un essai. 
// Si on les retire. Le script continuer de se dérouler et le terminal m'écrit le contenu de chaque echo. 


?>