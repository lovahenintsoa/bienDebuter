<?php
$tableau = array('jean','rob','jo','alan');
//echo $tableau[0] ."<br/>";

// tableau vide et affectation
$tablo =array();
$tablo[0]='jiji';
$tablo[1]='kiki';
$tablo[2]='jijo';
$tablo[3]='kike';
// echo $tablo[1]."<br/>";

// autre syntaxe
$tablo =array();
$tabli[]='jiji';
$tabli[]='kiki';
$tabli[]='jijo';
$tabli[]='kike';
// print_r($tabli);

// autre syntaxe
$tableau =['jean','po','jo','Alan'];
// print_r($tableau);

// 2 tableau associatif clé valeur
$tableau =['A1'=>'jean', 'B4'=> 'rob', 3=>'paul','toto'=>'jo'];
// print_r($tableau);

// autre syntaxe
$tableau =[];
$tableau['A1']='jen';
$tableau['B4']='rob';
$tableau[3]='paul';
$tableau['toto']='alan';
// print_r($tableau);


// pertinence des clé
$personne =[];
$personne['nom']='jen';
$personne['prenom']='rob';
$personne['age']=50;

// echo $personne['age'];

// constante
const COULEUR =['rouge','vert','bleu'];
// echo COULEUR[1];

// boucle
$tableau =['jean','po','jo','Alan'];
for($i=0;$i<4;$i++){
    //echo $tableau[$i] .'<br/>';
}

// avec la fonction count() ou sizeof()
$tableau =['jean','po','jo','Alan'];
for($i=0;$i<sizeof($tableau);$i++){
   // echo $tableau[$i] .'<br/>';
}


// la boucle foreach
$tableau =['jean','po','jo','Alan'];
foreach($tableau as $val){
   // echo $val .'<br/>';
}

// avec tableau valeur
$tableau =['A1'=>'jean', 'B4'=> 'rob', 3=>'paul','toto'=>'jo'];
foreach($tableau as $cle=>$val){
   // echo 'clé :' .$cle . ', valeur :' .$val .'<br/>';
}

// avec tableau recup juste lavaleur
$tableau =['A1'=>'jean', 'B4'=> 'rob', 3=>'paul','toto'=>'jo'];
foreach($tableau as $val){
   echo ' valeur :' .$val .'<br/>';
}

$tab=[0];
foreach($tab as &$val){
    var_dump($val);
    $tab[1]=1;
}

// la longueur d'un tableau
$tableau =['A1'=>'jean', 'B4'=> 'rob', 3=>'paul','toto'=>'jo'];
$taille = count($tableau);
// echo 'la taille du tableau est   :' .$taille;

// utilisation de in_aray
$tableau =['A1'=>'jean', 'B4'=> 'rob', 3=>'paul','toto'=>'jo'];

if (in_array('jean',$tableau)){
// echo 'jean est dans le tableau';
}

// utiliser le trosieme par defaut false on met true pour comparer avc type
$tableau =['10','33','55','78'];
if (in_array(33,$tableau,true)){
    echo '33 est dans le tableau';
}else{
    echo "33 n'est pas dans le tableau <br/>";
}

// savoir si la clé existe

$tableau =['A1'=>'jean', 'B4'=> 'rob', 3=>'paul','toto'=>'jo'];

if(array_key_exists(3,$tableau)){
  //  echo 'la cle 3 existe  ' . '  valeur = ' .$tableau[3];

}


// tester si index existe
$tableau =['jean','po','jo','Alan'];

if(array_key_exists(3,$tableau)){
  //  echo 'la cle 3 existe  ' . '  valeur = ' .$tableau[3];

}

// trier un tableau le probleme on perd les clés
$tableau =['A1'=>'jean', 'B4'=> 'rob', 3=>'paul','toto'=>'jo'];
sort($tableau);
foreach($tableau as $cle=>$val){
  //   echo 'clé :' .$cle . ', valeur :' .$val .'<br/>';
 }
 
 // trier un tableau le probleme on perd pas les clés
 $tableau =['A1'=>'jean', 'B4'=> 'rob', 3=>'paul','toto'=>'jo'];
 asort($tableau);
 
 foreach($tableau as $cle=>$val){
     
   //   echo 'clé :' .$cle . ', valeur :' .$val .'<br/>';
  }

  // trier decroissant un tableau le probleme on perd  les clés
 $tableau =['A1'=>'jean', 'B4'=> 'rob', 3=>'paul','toto'=>'jo'];
 rsort($tableau);
 
 foreach($tableau as $cle=>$val){
     
    //  echo 'clé :' .$cle . ', valeur :' .$val .'<br/>';
  }

    // trier decroissant un tableau le probleme on perd pas les clés
 $tableau =['A1'=>'jean', 'B4'=> 'rob', 3=>'paul','toto'=>'jo'];
 arsort($tableau);
 
 foreach($tableau as $cle=>$val){
     
    //  echo 'clé :' .$cle . ', valeur :' .$val .'<br/>';
  }


      // trier  un tableau suivant les clés le probleme on perd pas  les clés
 $tableau =['A1'=>'jean', 'B4'=> 'rob', 3=>'paul','toto'=>'jo'];
 ksort($tableau);
 
 foreach($tableau as $cle=>$val){
     
    //  echo 'clé :' .$cle . ', valeur :' .$val .'<br/>';
  }

  
      // trier decroissant  un tableau suivant les clés le probleme on perd pas  les clés
 $tableau =['A1'=>'jean', 'B4'=> 'rob', 3=>'paul','toto'=>'jo'];
 krsort($tableau);
 
 foreach($tableau as $cle=>$val){
     
      echo 'clé :' .$cle . ', valeur :' .$val .'<br/>';
  }

  // recherche la valeur s'il existe ds le tableau et retourne la valeur de la clé
  $tableau =['A1'=>'jean', 'B4'=> 'rob', 3=>'paul','toto'=>'jo'];

  $cle_element =array_search('rob',$tableau);
      //echo  ' la clé est : ' .$cle_element;
  
      // avec les clé numerique par defaut

      $tableau =['jean','po','jo','Alan'];
      $cle_element =array_search('jo',$tableau);
      //echo  ' la clé est : ' .$cle_element;

      // explode permet de découper une chaine
      $ensemble="1;2;3;4;5";
      $tableau =explode(";",$ensemble);
    //  echo " la premiere est : " .$tableau[0] ."<br/>";
     // echo " la derniere est : " .$tableau[count($tableau)-1]."<br/>";


       // explode autre exemple
       $ensemble="1-2-3-4-5";
       $tableau =explode("-",$ensemble);
       foreach($tableau as $valeur){
     //    echo $valeur.";". "<br/>";
       }
// c'est le contraire
$tableau =['jean','po','jo','Alan'];
$nom=implode(";",$tableau);
//echo " les nom sont  :" .$nom . "<br/>";

  // str_split autre exemple devient un tableau dont la 1 er valeur est 1;
  $ensemble="1;2;3;4;5";
  $tableau =str_split($ensemble,2);
  foreach($tableau as $valeur){
  //  echo $valeur."  ". "<br/>";
  }

  // ajouter des elements à la fin du tableau
  // array_push
  $tableau =['jean','po','jo','Alan'];
  array_push($tableau,"lova","tina");
  //echo $tableau[4];

  // autre exemple
  $tableau =[];
  for ($i=0;$i<=10;$i++){
    array_push($tableau,$i);
    //echo $tableau[$i].";". "<br/>";
  }

// pour supprimer la fin du tableau
$tableau =['jean','po','jo','Alan'];
$nom =array_pop($tableau);
//echo "le supprimer est  :" . $nom;

// autre exemple
$tableau =['jean','po','jo','Alan'];
for($i=0;$i<4;$i++){

echo "nb element anant suppr ".count($tableau) ."<br/>";
$nom =array_pop($tableau);
//echo "le supprimer est  :" . $nom . "<br/>";
}
echo "la taille finale est :  ".count($tableau) ."<br/>";


//selectionner aleatoirement un element et sa cle
$tableau =['jean','po','jo','Alan'];
$cle_aleatoire =array_rand($tableau);
//echo " nom selectionner par hasard : " .$tableau[$cle_aleatoire] ."<br/>";

//selectionner aleatoirement un element et sa cle
$tableau =['jean','po','jo','Alan'];
$cle_aleatoire =array_rand($tableau);
echo " nom selectionner par hasard : " .$cle_aleatoire ."<br/>";

// autre exemple avec 2 nombres
$tableau =['jean','po','jo','Alan'];
$cle_aleatoire =array_rand($tableau,2);
echo " nom selectionner par hasard : " .$tableau[$cle_aleatoire[0]].";" .$tableau[$cle_aleatoire[1]];