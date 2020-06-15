<?php

/*
function calcul_ttc($ht,$tva){
    return $ht*(1+$tva/100);
}

$prixHT =100;
const TVA =[2.1,5.5,10,20];

$prix_ttc=calcul_ttc($prixHT,TVA[3]);
echo " le prix ttc de  $prixHT est  : $prix_ttc";

*/
// creer une Exception et ajouter un message dans getMessage
/*
function multiplier($a,$b){
    if (!is_numeric($a) || !is_numeric($b))
    {
        throw new Exception('les deux parametre doivent etre des nombres');
        // c'est placé dans getmessage de Exception
    }
    return $a*$b;
}

try{
    echo multiplier(10 ,3).'<br/>';
    echo  multiplier('bjr',20);
}
catch(Exception $ex){
    echo 'une exception s\' est produite :',
    $ex->getMessage();
}
finally{
    echo'<br/>';
    echo 'fin'; // fin du script
}
*/
/*

function ajout(float $a, float $b):float{
    return $a+$b;
}

echo ajout(5.22,6.65)
*/

/*
declare(strict_types=1);// pour que le type de resultat soit strict

function affiche(): int{
    return "1";
}

try{
   affiche();
} catch(TypeError $e){ // pour envoyer le type d'erreur
    echo ($e-> getMessage());
}
*/

// null able: c'est pour pouvoir recuperer un int null venant de la base
/*
function test(?string $name): ?string {
    return $name;
}

var_dump(test(null)); // appel de la fonction NULL
echo"<br/>";
var_dump(test("Bonjour")); // appel de la fonction avec des caractere
*/

/*
$x=1;
$y=2;
var_dump(permute($x,$y),$x,$y);

function permute(&$x,&$y):void{
$z=$x;
$x=$y;
$y=$z;
}
*/
// copie par reference c'est la variable
// qui entre dans la fonction mais pas sa valeur




// static veut dire pas besoin d'instancier la methode
/*
function affiche_nb(){
    $nb=0;
    $nb= $nb+1;
    echo $nb. ";";
}

affiche_nb();
affiche_nb();


function affiche_nb2(){
   static $nb=0;
    $nb =$nb+1;
    echo $nb. ";";
}
affiche_nb2();
affiche_nb2();
*/


// fonction utiles
/*
$phrase = "Bonjour, il fait beau";
if (isset($phrase)){
    echo "la variable existe ";

}
else{
    echo "la variable n' existe pas";
}

*/
/*
//----------si $pharse ="" avec isset ca existe mais empty c'est null
$phrase = "Bonjour, il fait beau";
if (empty($phrase)){
    echo "la variable est nulle " ."<br/>";

}
else{
    echo "la variable n' est pas nulle"."<br/>";
}
*/

/*
function always_false(){
    return false;
}

if (empty(always_false())){
echo 'ceci est affiché';// false considerer comme empty
}
*/
/*
function affiche_parametres($param1,$param2){
    echo "la valeru du 1er arg ".func_get_arg(0)."<br/>";
    echo "la valeru du 1er arg ".func_get_arg(1)."<br/>";
}
affiche_parametres("bj","rob");
*/
/*
function affiche_nb_parametres($param1,$param2){
    echo "la valeru du 1er arg ".func_num_args()."<br/>"; // nb d'argument
}
affiche_nb_parametres("bj","rob");
*/
/*
function affiche_parametres2($param1,$param2){
    $num_args =func_num_args();
    $arg_liste = func_get_args();

    for($i =0;$i< $num_args;$i++) {
        echo "l'arg $i est : " .$arg_liste[$i] ."<br/>";
        }
}

affiche_parametres2("bj","rob");


function affiche_nb_parametres2($param1,$param2){

}

*/
/*
function incremente($i){
    $i++;
    var_dump(func_get_arg(0));
}

incremente(1);
*/
/*
// ellipscisse
function fonction_var(...$parametres){
    echo "le nombre de param est :" .count($parametres) ."<br/>";
//transfo du tableau en chaine
    echo "les valeurs sont :" .implode(" ",$parametres)."<br/>";
}

fonction_var('tigre');
fonction_var('tigre','lion');
fonction_var('tigre','lion','zebre');
*/

/*
$func_anonymous =function($param){
    echo "<p> bonjour ".$param ." !<P>";
};
$func_anonymous("rob");

*/

/*
// declaration du tableau 
$data =['tigre','lion','vache'];

array_walk($data,function (&$item){
    //passage en ref pour modifier les val ds le tableau
    //Exécute la fonction callback définie par l'utilisateur sur chaque élément du tableau array.
$item =ucwords(($item));
});

var_dump($data);
*/
/*
function fonction_recursive($n){
    $n++;
    echo "$n";
    if($n<10){
        fonction_recursive(($n));
    }
}
fonction_recursive(0);// affiche 1 à 10
*/
/*

// generer un nb aléatoire
echo rand()."<br/>";
echo rand(10,20)."<br/>";

// creer un id unique
echo "id unique : " .uniqid().",";

// affiche info php
echo phpversion();
phpinfo();
*/
/*
// envoyer un email
$to ="ad@gmail.fr";
$subject ="sujet";
$message= ' bonjour à tous';
$headers =' from........';
mail($to,$subject,$message,$headers);
// besoin d'un serveur smtp google par ex
*/
// gerer un memo tampo


ob_start();
echo ' 1er text ds lebuffer <br/>';


?>
<p> 2 eme texte dsn le buffer</p>
<?php
ob_end_flush();//on vide le tampon et on retourne au cient
?>
