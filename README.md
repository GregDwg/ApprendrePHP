![pngegg](https://user-images.githubusercontent.com/78653152/131904741-6bebe1d1-cab4-45c6-a7e0-99a361d25e12.png)
# ApprendrePHP
Liste d'exercices et de tutoriels pour apprendre PHP


Chapitre 5. Apprendre PHP / Les boucles : 

<?php

// Enoncé : 
// Algorithme qui demande à l'utilisateur de rentrer une note ou de taper "fin". 
// Chaque note est sauvegardée dans un tableau $notes (penser $notes[]).
// à la fin on affiche le tableau de notes sous forme de liste.


// Pseudocode : 

// 1. Tant que l'utilisateur ne tape pas fin. {
//     1.1. On lui demande d'entrer une note. 
// }
// 2. On vérifie si l'utilisateur a tapé 'fin" ou non. 
// 3. On ajoute la note tapée au tableau de notes. 
//      3.1. On doit transformer les notes entrées par l'utilisateur en nombre.
// 4.Pour chaque note dans note. 
    // On affiche "-note". 


// Code : 
    $notes = []; 
    $action = null;

// 1.Tant que l'utilisateur ne tape pas 'fin' : 
while ($action !=='fin') {
//      1.1. On lui demande de taper une note : 
        $action = readline('Veuillez entrer une note (ou \'fin\' pour terminer la saisie.) ');  

// 2. On vérifie si l'utilisateur a tapé 'fin' ou non. 
if ($action !== 'fin') {

//  3. On ajoute la note tapée dans le tableau de notes.
// Dans ce cas l'utilisateur veut entrer une autre note. 
// Il faut donc ajouter la note entrée par l'utilisateur dans le tableau déclaré en début. 
//  3.1. On transforme l'entrée de l'utilisateur de "readline" en "integer".
    $notes[] = (int)$action;
}
};

foreach  ($notes as $note) {
    echo "- $note \n";
}

// code en entier : 
$notes = []; 
$action = null;

while ($action !== 'fin') {
    $action = readline('Veuillez entrer une note (ou \'fin\' pour terminer la saisie.) ');  
    if ($action !== 'fin') {
        $notes[] = (int)$action;
    }
} 

foreach ($notes as $note) {
    echo "- $note";
}
?>
