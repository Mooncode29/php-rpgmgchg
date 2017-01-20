<?php
require_once 'vegetable.php';
require_once'cloth.php';
$date = date('d/m/Y', time());
$legume1 = new Vegetable(1,'carottes','5€','France',$date);
$legume2 = new Vegetable(2,'poireaux','3€','Espagne',$date);
$cloth1 = new Cloth ('3','pantalon','20€','zara');
$cloth2 = new Cloth('4','jupe','15€','desigual');
$cloth3 = new Cloth('5','robe','30€','kiabi');
$Mytab = [$legume1,$legume2,$cloth1,$cloth2,$cloth3];
return $Mytab;
// $produit = new Product(1, nom, '5€');
// echo $produit;
?>