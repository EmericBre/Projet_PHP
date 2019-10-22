<?php
// Test de la classe DAO
require_once('DAO.class.php');

// Creation de l'unique objet DAO
$dao = new DAO();

// Recupère toutes les catégories
$cat = $dao->getAllProduit();

// Affiche 2 produits pour le test : affiche le pere d'un produit
print($cat[2]->getRef().' '.$cat[2]->getNom().' < '.$cat[2]->getPere()). ' ';
foreach ($cat as $v) {
  if ($v->getRef() == $cat[2]->getPere()) {
    print($v->getNom()."\n");
  }
}

 ?>
