<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $produit->getTitre() ?></title>
  </head>
  <body>
    <h1><?= $produit->getTitre() ?></h1>
    <img src="../view/Design/<?= $produit->getImage() ?>" alt="">
    <p> Description : <?php print($produit->getDescription()); ?> <br> </p>
    <p> Caractéristiques : <?php print($produit->getCaractéristiques()); ?> <br> </p>
    <p> Prix : <?php print($produit->getPrix()); ?> <br> </p>
    <p> Fabricant : <?php print($produit->getFabricant()); ?> <br> </p>
    <p> Disponibilité : <?php print($produit->getDispo()); ?> <br> </p>
  </body>
</html>
