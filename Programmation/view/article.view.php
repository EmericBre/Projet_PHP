<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $produit->getTitre() ?></title>
  </head>
  <body>
    <h1><?= $produit->getTitre() ?></h1>
    <img src="../view/Design/<?= $produit->getImage() ?>" alt="">
  </body>
</html>
