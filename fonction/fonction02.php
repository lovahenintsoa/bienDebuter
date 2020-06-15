<?php
/*
$tablo=[];
for ($i=0;$i<=10;$i++){
$tablo[$i]=rand(1,10);
}
*/
/*
function permuter (&$tab,$i,$j){
$tmp=$tab[$i];
$tab[$i]=$tab[$j];
$tab[$j]=$tmp;

}*/
/*
for ($i =0;$i<count($tablo);$i++){

    for ($j=$i+1;$j<count($tablo);$j++){

        if($tablo[$j]<$tablo[$i]){
           
            $tmp=$tablo[$i];
            $tablo[$i]=$tablo[$j];
            $tablo[$j]=$tmp;


        }
    }
}

print_r($tablo);
echo implode(";",$tablo);
*/

//ecrire une fonction qui calcul la factorielle
// de maniere recursive

/*
function factorielle($nbr) 
    { 
       if($nbr === 0) // condition d'arret 
          return 1;  
      else 
          return $nbr*factorielle($nbr-1); 
    }  
?>
<?php
echo factorielle(5);
?>
*/

//Exrecice 4
//une fonction prenant un tab contenant des mots pour afficher 
//les mots separer par un espace pour avoir une phrase
/*
function phrase($tab){
    shuffle($tab);
    echo implode(' ',$tab);
}


$tab1=["Bonjour","Monsieur", "Robert", "Toi"];

phrase($tab1);

// exeercice 5 tab A de 10 entier alea entre 1-20
// tab B entier 1-20 # valeurs de tab A
// fonction x^3
//tableau html col 1 tab B col 2 les cubes
*/
/*

define('nb',20);
for ($i=1;$i<nb/2;$i++){
    $tabA[$i]=rand(1,nb);
}



for ($i=1;$i<nb;$i++){
if (! in_array($i,$tabA))
  $tabB[]=$i;
}
var_dump($tabA)."<br/";
var_dump($tabB);

function cube($x){
    return pow($x,3);
}
*/
/*

//ob_start();
echo"<table border>";
echo "<tr><td>valeur</td><td>cube</td></tr>";

foreach($tabB as $val)
echo "<tr><td>" .$val ."</td><td>".cube($val)."</td></tr>";
echo"</table>";
//ob_end_flush();

*/

//exo 6
/*fonction getlist() retournant un élément <select>
la fonction recoit en param le nom du controle et le tableau de val
qui sera afficher dans la liste
https//developer.mozilla.org/fr/docs/web/HTML/Elemant/select
*/

/*
function getList($name,$tab){
 
    $list ='<select name = "'.$name.'">';
 foreach($tab as $val)
    $list .='<option value="'.$val .'">'.$val.'</option>';

    return $list . '</select>';
}


 
$cars=["Berline","Cabriolet","Citadine","Crossover","pick up"];
echo getList('carList',$cars);

*/
// utiliser mysqli pour recuperer la table de la base
//https://www.php.net/mysqli
/*mysqli_connect()
mysqli_query
mysqli_fetch_all
mysqli_close
*/



/* Vérification de la connexion 
if (!$link) {
    printf("Echec de la connexion : %s\n", mysqli_connect_error());
    exit();
}

printf("Information sur le serveur : %s\n", mysqli_get_host_info($link));
 
// Perform query
if ($result = mysqli_query($link, "SELECT * FROM tbl_country")) {
    echo "Returned rows are: " . mysqli_num_rows($result);
  
  }
// Fetch all
*/
/*
try {
    $link = mysqli_connect("localhost:3308", "root", "", "phpsamples");
$result = mysqli_query($link, "SELECT * FROM tbl_country");
$rows= mysqli_fetch_all($result);
var_dump($rows);
for($i=0;$i<sizeof($rows);$i++)
$resu[$i]=$rows[$i][1];
var_dump($resu);
*/
/* Fermeture de la connexion */

/*
echo getList('carliste',$resu);
}
catch(Exception $e){
    echo $e->getMessage();
    die("Connection Error: " .mysqli_error($link));
}
finally{
    mysqli_close($link);
}
*/