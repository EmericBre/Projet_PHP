<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $produit->getTitre() ?></title>
    <link rel="stylesheet" href="../view/article.view.css">
  </head>
  <body>
    <h1><?= $produit->getTitre() ?></h1>
    <div class="produit">
      <img src="../view/Design/Produits/<?= $produit->getImage() ?>" alt="">
      <div class="caractéristiques">
        <p> Description : <?php print($produit->getDescription()); ?> <br> </p>
        <p> Caractéristiques : <?php print($produit->getCaractéristiques()); ?> <br> </p>
        <p> Prix : <?php print($produit->getPrix()); ?>€ <br> </p>
        <p> Fabricant : <?php print($produit->getFabricant()); ?> <br> </p>
        <p> Disponibilité : <?php print($produit->getDispo()); ?> <br> </p>
      </div>
    </div>
    <a href="afficherArticles.ctrl.php?categorie=<?= $categorie ?>" class="retour"> <img src="../view/Design/flèche_arrière.jpeg" alt="">Retour</a>
  </body>
</html>
