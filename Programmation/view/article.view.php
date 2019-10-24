<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $produit->getTitre() ?></title>
  </head>
  <body>
    <h1><?= $produit->getTitre() ?></h1>
    <img src="../view/Design/<?= $produit->getImage() ?>" alt="">
    <p> Description : <?= print($produit->getDescription()."\n"); ?>
        Caractéristiques : <?= print($produit->getCaractéristiques()."\n"); ?>
        Prix : <?= print($produit->getPrix()."\n"); ?>
        Fabricant : <?= print($produit->getFabricant()."\n"); ?>
        Disponibilité : <?= print($produit->getDispo()."\n"); ?></p>
  </body>
</html>
