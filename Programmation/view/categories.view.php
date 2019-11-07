<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $currentCategorie->getNom() ?></title>
    <link rel="stylesheet" href="../view/categories.view.css">
  </head>
  <body>
    <h1>Gun and Co</h1>
    <?php if ($currentCategorie->getRef()<3) { ?>
      <h2>Retrouvez ici les meilleurs équipements de l'Armée de <?= $currentCategorie->getNom() ?></h2>
    <?php } else if ($currentCategorie->getRef()==3) { ?>
      <h2>Retrouvez ici les meilleurs équipements de la Marine Nationale</h2>
    <?php } else if ($currentCategorie->getRef()==11) { ?>
      <h2>Retrouvez ici les meilleurs équipements concernant le <?= $currentCategorie->getNom() ?></h2>
    <?php } else if ($currentCategorie->getRef()==12) { ?>
      <h2>Retrouvez ici les meilleurs équipements concernant l'<?= $currentCategorie->getNom() ?></h2>
    <?php } else if ($currentCategorie->getRef()==21 || $currentCategorie->getRef()==22) { ?>
      <h2>Retrouvez ici les meilleurs équipements concernant les <?= $currentCategorie->getNom() ?></h2>
    <?php } ?>
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
    <?php if ($currentCategorie->getPere()!=0) { ?>
      <a href="afficherCategories.ctrl.php?categorie=<?= $currentCategorie->getPere() ?>" class="retour"> <img src="../view/Design/flèche_arrière.jpeg" alt="">Retour</a>
    <?php } else { ?>
      <a href="main.ctrl.php" class="retour"> <img src="../view/Design/flèche_arrière.jpeg" alt="">Retour</a>
    <?php } ?>
  </body>
</html>
