<?php
// Test de la classe DAO
require_once('DAO.class.php');

// Creation de l'unique objet DAO
$dao = new DAO();

// Recupère toutes les catégories
$cat = $dao->getAllCat();

// Affiche 1 catégorie et ses catégories filles pour le test
print("La classe ".$cat[0]->getRef().' '.$cat[0]->getNom()." a pour classes filles :"."\n");
$souscat = $dao->getSubCat($cat[0]->getRef());
foreach ($souscat as $v) {
  print($v->getRef().' '.$v->getNom()."\n");
}

// Affiche les différents produits d'une catégorie
print("Les produits de la classe ".$souscat[1]->getRef().' '.$souscat[1]->getNom()." sont :"."\n");
$prod = $dao->getArticles($souscat[1]->getRef());
foreach ($prod as $w) {
  print($w->getRef().' '.$w->getTitre().' '.$w->getPrix()."\n");
}
?>
