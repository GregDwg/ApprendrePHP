<?php 

// <------ JEU DU PALINDROME ------> 

echo ("Jeu du mot: \n"); 
$mot = readline("Veuillez entre un mot :");
$mot = strtolower($mot);
$palindrome = strrev($mot);
    if($mot === $palindrome){
    echo ("$palindrome est un palindrome \n"); 
    }
    else{
        echo ("Ce mot n'est pas un palindrome \n");
    }

    
?>
