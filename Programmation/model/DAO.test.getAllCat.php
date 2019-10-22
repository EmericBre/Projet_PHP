<?php
// Test de la classe DAO
require_once('DAO.class.php');

// Creation de l'unique objet DAO
$dao = new DAO();

// Recupère toutes les catégories
$cat = $dao->getAllCat();

// Affiche 2 catégories pour le test : affiche le pere d'une catégorie
print($cat[3]->getRef().' '.$cat[3]->getNom().' < '.$cat[3]->getPere()). ' ';
foreach ($cat as $v) {
  if ($v->getRef() == $cat[3]->getPere()) {
    print($v->getNom()."\n");
  }
}

 ?>
