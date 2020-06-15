<?php

// exercice 1
// on peut declarer une variable globale qu'on va utiliser après

/*
$prenom='Toto';
function bonjour($nom =null){
    global $prenom; // mais c'est pas bien juste à connaitre
    if ($nom===null){
        return 'bonjour';
    }
    return'bonjour ' .$nom ." ".$prenom ."<br/>";
} 

$resultat=bonjour('tina') ;
echo $resultat;
*/


// exercice 2
/*
function reponseoui_non($phrase){
    while(true){
     $reponse = trim(fgets(STDIN)); ;
        if( $reponse==='o'){
        return true;
        }
         elseif( $reponse==='n'){
         return false;
         }
    }
}

$resultat =reponseoui_non('voulez vous continuer?');
var_dump($resultat);
*/

echo 'donner nombre'."<br/>" ;
$reponse = trim(fgets(STDIN));
echo "clavier = ".$reponse;

?>