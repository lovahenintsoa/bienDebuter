<?php

// exercice 1 somme de 2 tableaux et mettre dans un autre

/*
define('NB',10);
for($i=0;$i<NB;$i++){
    $tablo[$i]=$i+1;
    $tablo1[$i]=$i+(NB+1);
    $res[$i]=$tablo[$i]+$tablo1[$i];
    echo "somme n° ".($i+1) ." =" .$res[$i];
}

*/

// exercice 2 rndom 1-100 dans un tableau de 10 puis mettre 
// dans une chaine séparer par un ;

/*
$tablo=[];
define('NB',10);
for($i=0;$i<NB;$i++){
    $tablo[$i]=rand($min=1,$max=100);
}
sort($tablo);

$resultat=implode(";",$tablo);
echo " les valeurs sont  :" .$resultat; 

*/


// exercice 3
/*
$tableau =['DUPONT'=> $tableau1 =['prenom'=>'PAUL', 'profession'=> 'ministre', 'age'=>50], 
            
           'DURAND'=> $tableau2 =['prenom'=>'ROBERT', 'profession'=> 'agriculteur', 'age'=>45]

];

print_r($tableau['DUPONT']);

echo $tableau['DUPONT']['profession'];

*/
/*
$dupont = ['prenom'=>'PAUL', 'profession'=> 'ministre', 'age'=>50];
$durand =['prenom'=>'ROBERT', 'profession'=> 'agriculteur', 'age'=>45];
$personne['DUPONT']=$dupont ;
$personne['DURAND']=$durand;

print_r($personne['DUPONT']);

echo $personne['DUPONT']['profession'];

foreach ($personne as $cle=>$valeur){

}*/

// Exercice 4
/*
$tableau1 =[6,25,35,61];
$tableau2 =[12,24,46];
$resultat=0;
for ($i=0;$i<4;$i++){
    for($j=0;$j<3;$j++){
       $resultat=$resultat+ $tableau1[$i]*$tableau2[$j];
    }
}
echo "total = " . $resultat;

*/

$film =['lien'=>'http://www.allocine.fr/films/','nom'=>"img/banniere1.jpg",
        'descriptif'=>'film'];
$vente =['lien'=>'https://www.bonprix.fr/','nom'=>"img/banniere2.jpg",
        'descriptif'=>'vente'];
$voiture =['lien'=>'https://www.lacentrale.fr/','nom'=>"img/banniere3.jpg",
        'descriptif'=>'voiture'];

$choix['1']=$film;
$choix['2']=$vente;
$choix['3']=$voiture ;

//selectionner aleatoirement un element et sa cle

$cle_aleatoire =array_rand($choix);
//echo " nom selectionner par hasard : " .$cle_aleatoire;

if ($cle_aleatoire ==1){
echo '<a href ="http://www.allocine.fr/films/"><img src ="img/banniere1.jpg"
alt ="film">';
echo '</a>';
}

elseif ($cle_aleatoire ==2){
    echo '<a href ="https://www.bonprix.fr/"><img src ="img/banniere2.jpg"
    alt ="vente">';
    echo '</a>';
}

elseif ($cle_aleatoire ==3){
    echo '<a href ="https://www.lacentrale.fr/"><img src ="img/banniere3.jpg"
    alt ="voiture">';
    echo '</a>';
}
?>
