<?php
// Test de la classe DAO
require_once('DAO.class.php');

// Creation de l'unique objet DAO
$dao = new DAO();

// Recupère toutes les catégories
$cat = $dao->getAllProduit();

// Affiche 1 produit pour le test
print($cat[2]->getRef().' '.$cat[2]->getCategorie().' '.$cat[2]->getImage().' '.$cat[2]->getTitre().' '.$cat[2]->getDescription().' '.$cat[2]->getCaractéristiques());
print($cat[2]->getPrix().' '.$cat[2]->getFabricant().' '.$cat[2]->getDispo().' '."\n");
 ?>
