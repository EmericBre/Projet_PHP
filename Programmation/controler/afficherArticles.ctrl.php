<?php
require_once('../model/Produit.class.php');
require_once('../model/Categorie.class.php');
require_once('../model/DAO.class.php');

$categorie = $_GET["categorie"];

$H = new DAO();

$cat = $H->getCat($categorie);

$produits = $H->getArticles($categorie);

include('../view/articles.view.php');
?>
