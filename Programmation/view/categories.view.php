<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $currentCategorie->getNom() ?></title>
    <link rel="stylesheet" href="../view/categories.view.css">
  </head>
  <body>
    <h1>Gun and Co, la démocratie à petit prix</h1>
    <h2>Retrouvez ici les meilleurs équipements de la catégorie <?= $currentCategorie->getNom() ?> </h2>
    <div class="produit">
      <?php require_once('../controler/afficherCategories.ctrl.php'); ?>
      <?php foreach ($subCategories as $subCat): ?>
        <?php if ($subCat->getFille() == 1) { ?>
          <a href="afficherCategories.ctrl.php?categorie=<?= $subCat->getRef() ?>" > <img src="../view/Design/Catégories/<?= $subCat->getImage() ?>" alt=""> <?= $subCat->getNom() ?> </a> <br>
          <br>
        <?php } endforeach;?>
    </div>
    <div class="catégorie">
        <?php foreach ($subCategories as $subCat): ?>
        <?php if ($subCat->getFille() == 0) { ?>
          <a href="afficherArticles.ctrl.php?categorie=<?= $subCat->getRef() ?>" > <img src="../view/Design/Catégories/<?= $subCat->getImage() ?>" alt=""> <?= $subCat->getNom() ?> </a> <br>
          <br>
        <?php } endforeach;?>
    </div>
  </body>
</html>
