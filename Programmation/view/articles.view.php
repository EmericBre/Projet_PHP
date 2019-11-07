<html>
<head>
  <title>Gun and Co</title>
  <link rel="stylesheet" href="../view/articles.view.css">
</head>

<body>
  <header>
    <h1>Gun and Co, la démocratie à petit prix</h1>
    <h2>Retrouvez ici les meilleurs produits de la catégorie <?= $cat->getNom() ?></h2>
  </header>
  <?php foreach ($produits as $produit): ?>
    <a href="afficherArticle.ctrl.php?categorie=<?= $produit->getCategorie() ?>&produit=<?= $produit->getRef() ?>"> <img src="../view/Design/<?= $produit->getImage() ?>" alt=""/> <?= $produit->getTitre() ?> </a>
  <?php endforeach; ?>
</body>
</html>
