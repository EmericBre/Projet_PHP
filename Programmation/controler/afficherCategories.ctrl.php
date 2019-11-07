<?php
require_once('../model/Produit.class.php');
require_once('../model/Categorie.class.php');
require_once('../model/DAO.class.php');

$categorie = $_GET["categorie"];

$H = new DAO();

$currentCategorie = $H->getCat($categorie);
$subCategories = $H->getSubCat($categorie);

include('../view/categories.view.php');
?>
