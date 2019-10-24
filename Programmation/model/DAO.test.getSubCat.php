<?php
// Test de la classe DAO
require_once('DAO.class.php');

// Creation de l'unique objet DAO
$dao = new DAO();

// Recupère toutes les catégories
$cat = $dao->getAllCat();

// Affiche 2 catégories et leurs catégories filles pour le test
print("La classe ".$cat[0]->getRef().' '.$cat[0]->getNom()." a pour classes filles :"."\n");
$souscat = $dao->getSubCat($cat[0]->getRef());
foreach ($souscat as $v) {
  print($v->getRef().' '.$v->getNom()."\n");
}

print("La classe ".$souscat[1]->getRef().' '.$souscat[1]->getNom()." a pour classes filles :"."\n");
$souscat2 = $dao->getSubCat($souscat[1]->getRef());
foreach ($souscat2 as $x) {
  print($x->getRef().' '.$x->getNom()."\n");
}

// Affiche les différents produits d'une catégorie
print("Les produits de la classe ".$souscat2[0]->getRef().' '.$souscat2[0]->getNom()." sont :"."\n");
$prod = $dao->getArticles($souscat2[0]->getRef());
foreach ($prod as $w) {
  print($w->getRef().' '.$w->getTitre().' '.$w->getPrix()."\n");
}

// Affiche un produit
print("Le produit de la classe ".$prod[0]->getRef().' '.$prod[0]->getTitre()." est :"."\n") {
  $produitindiv = $dao->getArticle($prod[0]->getCategorie(), $prod[0]->getRef());
  print($produitindiv->getRef().' '.$produitindiv->getCategorie().' '.$produitindiv->getImage().' '.$produitindiv->getTitre().' '.$produitindiv->getDescription().' '.$produitindiv->getCaractéristiques());
  print($produitindiv->getPrix().' '.$produitindiv->getFabricant().' '.$produitindiv->getDispo().' '."\n");
}
?>
