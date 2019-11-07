<?php
require_once('../model/Produit.class.php');
require_once('../model/Categorie.class.php');
require_once('../model/DAO.class.php');

$H = new DAO();

$categories = $H->getAllCat();

include('../view/main.view.php');

?>
