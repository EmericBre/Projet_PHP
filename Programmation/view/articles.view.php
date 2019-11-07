<html>
<head>
  <title>Gun and Co</title>
  <link rel="stylesheet" href="../view/articles.view.css">
</head>

<body>
  <header>
    <h1>Gun and Co</h1>
    <h2>Retrouvez ici les meilleurs équipements concernant les <?= $cat->getNom() ?></h2>
  </header>
  <?php foreach ($produits as $produit): ?>
    <a href="afficherArticle.ctrl.php?categorie=<?= $produit->getCategorie() ?>&produit=<?= $produit->getRef() ?>"> <img src="../view/Design/Produits/<?= $produit->getImage() ?>" alt=""/> <?= $produit->getTitre() ?> </a>
  <?php endforeach; ?>

  <a href="afficherCategories.ctrl.php?categorie=<?= $cat->getPere() ?>" class="retour"> <img src="../view/Design/flèche_arrière.jpeg" alt="">Retour</a>
</body>
</html>
