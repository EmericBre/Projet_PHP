<?php
  require_once('../model/Produit.class.php');
  require_once('../model/Categorie.class.php');
  require_once('../model/DAO.class.php');

  $categorie = $_GET["categorie"];
  $ref = $_GET["produit"];

  $H = new DAO();

  $produit = $H->getArticle($categorie,$ref);

  include('../view/article.view.php');
?>
